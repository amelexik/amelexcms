<?
$orders_count = (int)getConfig("order_items_count_onpage");
if (!empty($gAction)){
	if ($gAction == "drop_order_item") {
		$order_item_id = (int) $_GET["order_item_id"];
		$sql = "DELETE FROM orders WHERE id={$order_item_id}";
		$sql2 = "DELETE FROM order_items WHERE order_id={$order_item_id}";
		$admin->db->query($sql);
		$admin->db->query($sql2);
	}
}
if (!empty($pAction)){
	if ($pAction == "update_order_item_status"){
		$back_url = "?section=".$admin->section;
		if($submit_mode == "set"){
			$back_url = $_SERVER["REQUEST_URI"];
		}
		$order_status = clearvar($_POST["order_status"]);
		$order_id = (int)clearvar($_POST["order_id"]);
		
		if ((!empty($order_status)) && ($order_id>0)){
			$sql = "UPDATE orders SET status='{$order_status}' WHERE id={$order_id}";
			$admin->db->query($sql);
		}
		header("location:$back_url");
		exit;
	}
}
if (!$admin->mode){		
		//print_r($_SERVER);
		
		$limit_start;
		$orders_count = $orders_count;

		if (($_GET["p"]) == 1 or !($_GET["p"])){
			$limit_start = 0;
		}
		else{
			$limit_start = $orders_count * ($_GET["p"]);
			$limit_start = $limit_start - $orders_count;
		}
		
		$orders_tmp = $admin->db->select("SELECT * FROM orders ORDER by date DESC LIMIT {$limit_start},{$orders_count}");
		
		$orders = array();
		$num = 1;
		foreach($orders_tmp as $key => $value){
			$orders["{$num}"]["id"] = $value["id"];
			$orders["{$num}"]["date"] = $value["date"];
			$orders["{$num}"]["status"] = $value["status"];

			if ($value["user_id"] > 0){
				$user_type = "site_user";
				$user_data = $admin->db->selectRow("SELECT * FROM users WHERE id={$value["user_id"]}");
			}
			else{
				$user_type = "simple";
				$user_data = $admin->db->selectRow("SELECT * FROM users_tmp WHERE id={$value["tmp_user_id"]}");
			}

			$orders["{$num}"]["user_name"] = $user_data["name"];
			$orders["{$num}"]["user_email"] = $user_data["email"];
			$orders["{$num}"]["user_phone"] = $user_data["phone_num"];
			$orders["{$num}"]["user_type"] = $value["user_type"];
			$orders["{$num}"]["user_id"] = $value["user_id"];
			$orders["{$num}"]["tmp_user_id"] = $value["tmp_user_id"];
			$orders["{$num}"]["delivery_method"] = $value["delivery_method"];
			$orders["{$num}"]["payment_method"] = $value["payment_method"];
			$orders["{$num}"]["time_of_delivery"] = $value["time_of_delivery"];
			$orders["{$num}"]["comments"] = $value["comments"];
			
			$orders["{$num}"]["edit_url"] = "?section=".$admin->section."&mode=edit_order_item&order_item_id=".$value["id"];
			$orders["{$num}"]["drop_url"] = "?section=".$admin->section."&gAction=drop_order_item&order_item_id=".$value["id"];
			
			$num++;
		}

		//print_r($orders);
		
		
		/***********************************************************************/
		$countSQL = "SELECT COUNT(orders.id) FROM orders";
		$all = (int) $db->selectCell($countSQL);		

		//$lister = pageLister($all_quantity,$onpage_quantity,$getVar_name="p");
		$lister = pageLister2($all,$orders_count);
		/***********************************************************************/
		
		$smarty->assign("lister",$lister);
		$smarty->assign("orders",$orders);
}
else{
	if ($admin->mode == "edit_order_item"){
		if ($order_item_id > 0){
			$orderData = $admin->db->selectRow("SELECT * FROM orders WHERE id={$order_item_id}");
			//print_r($orderData);
			
			if ($orderData["user_id"]>0){
				$userData = $admin->db->selectRow("SELECT * FROM users WHERE id={$orderData["user_id"]}");
				$userData["user_type"] = "site_user";
			}
			else{
				if ($orderData["tmp_user_id"]>0){
					$userData = $admin->db->selectRow("SELECT * FROM users_tmp WHERE id={$orderData["tmp_user_id"]}");
					$userData["user_type"] = "simple";
				}
			}
			//print_r($userData);
			
			$orderItemsData = $admin->db->select("SELECT * FROM order_items WHERE order_id={$order_item_id}");
			$orderTotalPrice = 0.00;
			foreach($orderItemsData as $key => $value){
				$total_price = floatval(makeTotalPrice($value["price"],$value["quantity"]));
				$orderItemsData["{$key}"]["total_price"] = $total_price;
				$orderTotalPrice = $orderTotalPrice + $total_price;
			}
			//print_r($orderItemsData);
			$smarty->assign("orderData",$orderData);
			$smarty->assign("userData",$userData);
			$smarty->assign("orderItemsData",$orderItemsData);
			$smarty->assign("orderTotalPrice",$orderTotalPrice);
		}
	}
}

?>