<?

//echo $cart->cartTotalPrice;

$app->meta['title'] = "Корзина";

if (isset($_GET)){
	if (isset($_GET['getAction'])){
		if ($_GET['getAction'] == "dropItem"){
			$back_url = "/cart/";
			$key = (int)$_GET['key'];
			$cart->dropItem($key);
			header("location:$back_url");
			exit;
		}
		if ($_GET['getAction'] == "addItem"){
			
			$back_url = "/cart/";
			
			$product_id = (int)$_GET["product_id"];
			
			if ($product_id > 0){
				$product_data = get_product_data(array("product_master_item_id"=>$product_id,"lang"=>1));
				$add_params["item_id"] = $product_data["item_id"];
				$add_params["category_master_id"] = $product_data["category_master_id"];
				$add_params["eurocode"] = $product_data["eurocode"];
				$add_params["currency"] = $product_data["currency"];
				$add_params["trade_price"] = $product_data["trade_price"];
				$add_params["retail_price"] = $product_data["retail_price"];
				$add_params["item_title"] = $product_data["title"];
				$cart->addToCart($add_params);
			}
			header("location:$back_url");
			exit;
		}
	}
}
if (isset($_POST)){
	if (isset($_POST['postAction'])){
		if ($_POST['postAction'] == 'updateCart'){
			if (!empty($_POST["quantity"])){
				foreach ($_POST["quantity"] as $key => $quantity){
					$cart->updateItemQuantity($key,$quantity);
				}
			}
			if (!empty($_POST["drop"])){
				foreach ($_POST["drop"] as $key => $val){
					$cart->dropItem($key);
				}
			}
			header("location:/cart/");
			exit();
		}
		if ($_POST['postAction'] == 'order'){
			
			//echo "<pre>";
		//print_r($_POST);
		//	echo "<pre>";
		//	exit;
			
			$buyer_type = $_POST["buyer_type"];
			
			if ($buyer_type == "simple"){
			
						//echo $buyer_type;
						
						$errors = array();
						
						$name = clearvar($_POST["name"]);
						$country = clearvar($_POST["country"]);
						$city = clearvar($_POST["city"]);
						$phone_num = clearvar($_POST["phone_num"]);
						$email = clearvar($_POST["email"]);
						$delivery_method = clearvar($_POST["delivery_method"]);
						$payment_method = clearvar($_POST["payment_method"]);
						$time_of_delivery = clearvar($_POST["time_of_delivery"]);
						$comments = clearvar($_POST["comments"]);
						
						if ($name == ""){
							$errors["name"] = "Не указано имя";
						}
						if ($city == ""){
							$errors["city"] = "Не указан город";
						}
						if ($phone_num == ""){
							$errors["phone_num"] = "Не указан номер телефона";
						}
						if ($email == ""){
							$errors["email"] = "Не указан номер EMAIL адрес";
						}
						else{
							if (check_email($email) == false){
								$errors["email"] = "E-MAIL адрес некоректный";
							}
						}
						
						if ($delivery_method == "none"){
							$errors["delivery_method"] = "Не указан способ доставки";
						}
						if ($payment_method == "none"){
							$errors["payment_method"] = "Не указан метод оплаты";
						}
						if ($time_of_delivery == "none"){
								if ($delivery_method == "delivery_method_2"){
									$errors["time_of_delivery"] = "Укажите удобное время доставки товара";
								}
						}
						
						if (empty($errors)){
							//`id`, `name`, `country`, `city`, `phone_num`, `email`, `delivery_method`, `payment_method`, `time_of_delivery`, `comments` 
							$addUserSQL = "
								INSERT INTO users_tmp
								(name,country,city,phone_num,email,delivery_method,payment_method,time_of_delivery,comments)
								VALUES
								('{$name}','{$country}','{$city}','{$phone_num}','{$email}','{$delivery_method}','{$payment_method}','{$time_of_delivery}','{$comments}');
							";
							//echo $addUserSQL;
							// add tmp user
							$db->query($addUserSQL);
							
							$tmp_user_id = mysql_insert_id();
						}
						if ($tmp_user_id > 0){
							$orderSQL = "INSERT INTO orders (tmp_user_id,delivery_method,payment_method,time_of_delivery,comments,total) VALUES ({$tmp_user_id},'{$delivery_method}','{$payment_method}','{$time_of_delivery}','{$comments}','{$cart->cartTotalPrice()}')";
							$db->query($orderSQL);
							$order_id = mysql_insert_id();
						}
						
						$smarty->assign("errors",$errors);
			
			}
			elseif($buyer_type == "site_user"){
			
				$user_id = $_SESSION["user"]["id"];
				$errors = array();
				$delivery_method = $_POST["delivery_method"];
				$payment_method = $_POST["payment_method"];
				$time_of_delivery = $_POST["time_of_delivery"];
				$comments = $_POST["comments"];
				
				if ($delivery_method == "none"){
					$errors["delivery_method"] = "Не указан способ доставки";
				}
				if ($payment_method == "none"){
					$errors["payment_method"] = "Не указан метод оплаты";
				}
				if ($time_of_delivery == "none"){
						if ($delivery_method == "delivery_method_2"){
							$errors["time_of_delivery"] = "Укажите удобное время доставки товара";
						}
				}
				
				$orderSQL = "INSERT INTO orders (user_id,delivery_method,payment_method,time_of_delivery,comments,total) VALUES ({$user_id},'{$delivery_method}','{$payment_method}','{$time_of_delivery}','{$comments}','{$cart->cartTotalPrice()}')";
				$db->query($orderSQL);
				$order_id = mysql_insert_id();
				
				
				$smarty->assign("errors",$errors);
				
			}
			
			if (empty($errors)){
				if ($order_id > 0){
				/****************************/
				
				# emailContentHead
				##########################################################################################
				$emailContentHead = '<h3>Заказ из интернет магазина <b>'.$_SERVER["HTTP_HOST"].'</b></h3>';
				$emailContentHead.='<p>Здравствуйте!';
				$emailContentHead.='<p>Спасибо, что сделали у нас заказ';
				$emailContentHead.='<p>Если есть вопросы по заказу:';
				$emailContentHead.='<p>тел: '.$app->constants["general"]["phone_num_1"].'<br />';
				$emailContentHead.='e-mail: '.getConfig('admin_email').'</p>';
				$emailContentHead.='<h3>Товары:</h3>';
				
				# emailContentHeadAdmin
				##########################################################################################
				$emailContentHeadAdmin = '<h3>Заказ из интернет магазина <b>'.$_SERVER["HTTP_HOST"].'</b></h3>';
				$emailContentHeadAdmin.='<p>Здравствуйте! Из Интернет магазина был сделан заказ';
				$emailContentHeadAdmin.='<h3>Товары:</h3>';

				# itemsTable HEAD
				##########################################################################################
				$itemsTable = '<p><table width="700" cellspacing="1" cellpadding="5" border="1">';
					$itemsTable.= '<tr>';
						$itemsTable.= '<th>#</th>';
						$itemsTable.= '<th>articul</th>';
						$itemsTable.= '<th>Наименование детали</th>';
						$itemsTable.= '<th>Цена</th>';
						$itemsTable.= '<th>кол.</th>';
						$itemsTable.= '<th>Сумма</th>';
				$itemsTable.= '</tr>';	
				
				
				$_SESSION["orderData"]["items"] = array();
				$fullCart = $cart->getFullCart();
				
				foreach($fullCart as $key => $item){
					$item_id = $item["item_id"];
					$category_master_id = $item["category_master_id"];
					$eurocode = $item["eurocode"];
					$articul = $item["articul"];
					$currency = $item["currency"];
					$trade_price = $item["trade_price"];
					$retail_price = $item["retail_price"];
					$item_title = $item["item_title"];
					$quantity = $item["quantity"];
					$rate = $item["rate"];
					$price = $item["price"];
					$totalPrice = $item["totalPrice"];
					
					$_SESSION["orderData"]["items"]["{$key}"]["item_id"] = $item_id;					
					$_SESSION["orderData"]["items"]["{$key}"]["category_master_id"] = $category_master_id;					
					$_SESSION["orderData"]["items"]["{$key}"]["eurocode"] = $eurocode;					
					$_SESSION["orderData"]["items"]["{$key}"]["articul"] = $articul;					
					$_SESSION["orderData"]["items"]["{$key}"]["currency"] = $currency;					
					$_SESSION["orderData"]["items"]["{$key}"]["trade_price"] = $trade_price;					
					$_SESSION["orderData"]["items"]["{$key}"]["retail_price"] = $retail_price;					
					$_SESSION["orderData"]["items"]["{$key}"]["item_title"] = $item_title;					
					$_SESSION["orderData"]["items"]["{$key}"]["quantity"] = $quantity;					
					$_SESSION["orderData"]["items"]["{$key}"]["rate"] = $rate;					
					$_SESSION["orderData"]["items"]["{$key}"]["price"] = $price;					
					$_SESSION["orderData"]["items"]["{$key}"]["totalPrice"] = $totalPrice;					
					
					//SELECT `id`, `order_id`, `item_id`, `category_master_id`, `eurocode`, `currency`, `trade_price`, `retail_price`, `name`, `quantity`, `rate`, `price`, `totalPrice` FROM `pmatools`.`order_items` LIMIT 0, 1000;
					$orderItemsSQL = "
						INSERT into order_items 
						(order_id,item_id,category_master_id,eurocode,articul,currency,trade_price,retail_price,name,quantity,rate,price,totalPrice) VALUES 
						('{$order_id}','{$item_id}','{$category_master_id}','{$eurocode}','{$articul}','{$currency}','{$trade_price}','{$retail_price}','{$item_title}',{$quantity},'{$rate}','{$price}','{$totalPrice}');
					";
					
					$db->query($orderItemsSQL);
					
					# itemsTable BODY
					##########################################################################################
					$itemsTable.= '<tr>';
						$itemsTable.= '<td>'.$key.'</td>';
						$itemsTable.= '<td>'.$item["articul"].'</td>';
						$itemsTable.= '<td>'.$item["item_title"].'</td>';
						$itemsTable.= '<td>'.$item["price"].'</td>';
						$itemsTable.= '<td>'.$item["quantity"].'</td>';
						$itemsTable.= '<td>'.$item["totalPrice"].'</td>';
					$itemsTable.= '</tr>';					
				}
				
				$_SESSION["orderData"]["cart_total_price"] = round($cart->cartTotalPrice(),2);
					
					$itemsTable.= '<tr><td colspan="7" align="right">итого: <font size="4">'.$_SESSION["orderData"]["cart_total_price"]. 'UAN</font></td></tr>';
					$itemsTable.= '</table></p>';
					
					$emailContent = $emailContentHead.$itemsTable;
					$emailContentAdmin = $emailContentHeadAdmin.$itemsTable;
					
					//echo $emailContent;
					
					//echo "<hr />";
					
					//echo $emailContentAdmin;

					include (LIBS_PATH."phpmailer/class.phpmailer.php");
					$phpmailer = new PHPMailer();
					$phpmailer->IsMAIL();
					//$mmail->Host     = "";
					//$mmail->SMTPAuth = true;
					//$mmail->Username = "";
					//$mmail->Password = "";
					$phpmailer->From = "store@".$_SERVER["SERVER_NAME"];
					$phpmailer->FromName = "Интернет Магазин PMATools";
					$phpmailer->ContentType = "text/plain";
					$phpmailer->CharSet = 'UTF-8';
					$phpmailer->IsHTML(true);
					$phpmailer->Subject = "Заказ из интернет магазина www.".$_SERVER["HTTP_HOST"];
					$phpmailer->Body = $emailContentAdmin;
					
					
					$admin_email = getConfig('admin_email');
					
					// 1
					$phpmailer->AddAddress($admin_email);
					$phpmailer->Send();
					$phpmailer->ClearAddresses();
					
					// 2
					
					if ($_SESSION["user"]["email"] != ""){
						$email = $_SESSION["user"]["email"];
					}
					
					$phpmailer->Body = $emailContent;
					$phpmailer->AddAddress($email);
					$phpmailer->Send();
					$phpmailer->ClearAddresses();						
					
					
					# чистим корзину
					$cart->clearCart();
					
					
					header("location:/cart/orderfinish/");
					exit;
				
				//print_r($fullCart);
				
				
				/****************************/
				}
			}
			
		}
	}
}


if ($cart->cartCount > 0){
	$fullCart = $cart->getFullCart();
	$smarty->assign("fullCart",$fullCart);
}

if ($app->module["mode"] != ""){
	if ($app->module["mode"] == "order"){
		if ($cart->cartCount == 0){
			header("location:/cart/");
			exit;
		}
	}
	if ($app->module["mode"] == "orderfinish"){
		$app->meta['title'] = "Завершение покупки";
		
		foreach($_SESSION["orderData"]["items"] as $key => $value){
		}
		
		//echo $emailContent;	
		
		
		if (empty($_SESSION["orderResult"])){
		
			//header("location:/cart/");
			//exit;
		
		}
		
	}
}
else{
}

?>