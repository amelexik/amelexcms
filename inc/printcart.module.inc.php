<?

$app->meta["title"] = "Print Cart";

if (empty($_SESSION["orderData"]["items"])){
	header("location:/cart/");
	exit;
}
?>