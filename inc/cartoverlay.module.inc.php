<?
$fullCart = $cart->getFullCart();
$smarty->assign("fullCart",$fullCart);
$smarty->assign("cCode",$_GET["code"]);
?>