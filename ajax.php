<?
error_reporting(E_WARNING || E_ERROR);
//error_reporting(E_ALL);

include ($_SERVER["DOCUMENT_ROOT"]."/sturtup.inc.php");

include (LIBS_PATH."functions.php");
include (LIBS_PATH."app.class.php");
include (LIBS_PATH."cart.class.php");

$cart = new Cart();
$app = new App();

$section = @$_GET["section"];
$action = @$_GET["action"];

if (!empty($section)){
	
	if ($section == "cart"){
	
		if (!empty($action)){
		
			# добавить в корзину
			if ($action == "addToCart"){
	
				sleep(1);
				
				$item_id = @$_GET["item_id"];
				$category_master_id = @$_GET["category_master_id"];
				$eurocode = @$_GET["eurocode"];
				$articul = @$_GET["articul"];
				$currency = @$_GET["currency"];
				$trade_price = @$_GET["trade_price"];
				$retail_price = @$_GET["retail_price"];
				$price = @$_GET["price"];
				$item_title = @$_GET["item_title"];
				
				
				if ($cart->addToCart(array("item_id"=>$item_id,"category_master_id"=>$category_master_id,"eurocode"=>$eurocode,"articul"=>$articul,"currency"=>$currency,"trade_price"=>$trade_price,"retail_price"=>$retail_price,"price"=>$price,"item_title"=>$item_title))){
					echo "added";
				}
				else{
					echo "error";
				}
			
			}
			# очистить корзину
			if ($action == "clearCart"){
				$cart->clearCart();
			}
			# количество товаров в корзине
			if ($action == "getCartCount"){
				echo $cart->cartItemsCount;
			}
			# общая цена всех товаров в корзине
			if ($action == "getCartTotalPrice"){
				echo $cart->cartTotalPrice;
			}
		}
	
	}
	
	if ($section == "cars"){
		if ($action == "getModels"){
			$id = (int)$_GET["id"];
			if ($id>0){
				$models = $app->getMenu($id);
				$result = "";
				foreach($models as $key => $value){
					$result = $result."<option value='{$value["id"]}'>{$value["name"]}</option>\n";
				}
				echo $result;
			}
			else{
				echo "<option value=''>...</option>";
			}
		}
	}

}

?>