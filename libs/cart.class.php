<?
session_start();
//error_reporting(E_ALL);
class Cart{
	
	var $cartCount;
	var $cartItemsCount;
	var $cartTotalPrice;
	var $fullCart;
	
	function __construct(){
		if (!session_is_registered("cart")){
			session_register("cart");
			$_SESSION["cart"] = array();
		}
		$this->cartCount = sizeof($_SESSION["cart"]);
		$this->cartTotalPrice = $this->cartTotalPrice();
		$this->cartItemsCount = $this->cartItemsCount();
		$this->fullCart = $this->getFullCart();
		
	}
	# добавить в корзину
	function addToCart($params){
		
		sleep(1);
		
		$item_id = $params["item_id"];
		$category_master_id = $params["category_master_id"];
		$eurocode = $params["eurocode"];
		$articul = $params["articul"];
		$currency = $params["currency"];
		$trade_price = $params["trade_price"];
		$retail_price = $params["retail_price"];
		$price = $params["price"];
		$item_title = $params["item_title"];
		$quantity = 1;
		
		if (!empty($item_id)){
			
			if ($this->inCart($item_id) == 1){
				echo "Запчасть уже в корзине";
				return false;
			}
			else{
				$upCount = $this->cartCount + 1;
				//echo $upCount;
				$_SESSION["cart"][$upCount]["item_id"] = $item_id;
				$_SESSION["cart"][$upCount]["category_master_id"] = $category_master_id;
				$_SESSION["cart"][$upCount]["eurocode"] = $eurocode;
				$_SESSION["cart"][$upCount]["articul"] = $articul;
				$_SESSION["cart"][$upCount]["currency"] = $currency;
				$_SESSION["cart"][$upCount]["trade_price"] = $trade_price;
				$_SESSION["cart"][$upCount]["retail_price"] = $retail_price;
				$_SESSION["cart"][$upCount]["price"] = $price;
				$_SESSION["cart"][$upCount]["item_title"] = stripslashes($item_title);
				$_SESSION["cart"][$upCount]["quantity"] = $quantity;
				return true;
			}
		}
		
	}
	# updateItemQuantity
	function updateItemQuantity($key,$quantity){
		$quantity = (int) $quantity;
		if ($quantity == 0){
			$quantity = 1;
		}
		$_SESSION["cart"][$key]["quantity"] = $quantity;
	}
	# dropItem
	function dropItem($key){
		unset($_SESSION["cart"][$key]);
	}
	# очистить корзину
	function clearCart(){
		unset($_SESSION["cart"]);
	}
	# проверка наличия товара в корзине
	function inCart($item_id){
		$ret = false;
		$item_id = (int)$item_id;
		
		if ($item_id>0){
			if (!empty($_SESSION["cart"])){
				foreach($_SESSION["cart"] as $key => $value){
					if ($value["item_id"] == $item_id){
						$ret = 1;
						return $ret;
						break;
					}
				}
			}
		}
	}
	# 
	function getFullCart(){
		$fullCart = array();
		if ($this->cartCount > 0){
			$fullCart = $_SESSION["cart"];
			
			foreach($fullCart as $key => $value){
				
				//$rate = getRate($value["currency"]);
				
				//$orig_price = $value["trade_price"];
				//$price = makePrice($orig_price,$rate);
				
				$price = $value["price"];
				$quantity = $value["quantity"];
				
				$totalPrice = makeTotalPrice($price,$quantity);
				
				$fullCart["{$key}"]["rate"] = $rate;
				$fullCart["{$key}"]["price"] = $price;
				$fullCart["{$key}"]["totalPrice"] = $totalPrice;
			}
		}
		return $fullCart;
	}
	
	function cartTotalPrice(){
		$cart_total_price = 0.00;
		foreach($_SESSION["cart"] as $key => $value){
			
			$quantity = $value["quantity"];
			$price = $value["price"];
			
			$totalPrice = makeTotalPrice($price,$quantity);
			$cart_total_price = $cart_total_price + $totalPrice;
		}
		return round($cart_total_price,2);
	}
	
	function cartItemsCount(){
		$return = 0;
		if ($this->cartCount > 0){
			foreach($_SESSION["cart"] as $key => $value){
				$quantity = (int)$value["quantity"];
				$return = $return + $quantity;
			}
		}
		else{
			$return = 0;
		}
		return $return;
	}

}

?>