<?php
session_start();
error_reporting(E_WARNING || E_ERROR);
//error_reporting(E_ALL);
//phpinfo();
//error_reporting(0);
//error_reporting(E_ALL);
//print_r($_GET);

/*
if($_SERVER["REQUEST_URI"] == "/catalog/" or $_SERVER["REQUEST_URI"] == "/catalog" ){
	header("location:/");
	exit;
}
if($_SERVER["REQUEST_URI"] == "/catalog/avtoaksesuari/" or $_SERVER["REQUEST_URI"] == "/catalog/avtoaksesuari" ){
	header("location:/");
	exit;
}
*/


include ($_SERVER["DOCUMENT_ROOT"]."/sturtup.inc.php");

include (LIBS_PATH."functions.php");
include (LIBS_PATH."app.class.php");
include (LIBS_PATH."cart.class.php");
$app = new App();

$cart = new Cart();


include (LIBS_PATH."smarty/Smarty.class.php");
$smarty = new Smarty();

$smarty->template_dir = $app->smarty_theme_path."templates/";
$smarty->compile_dir = $app->smarty_theme_path."templates_c/";
$smarty->debugging = false;
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//


//print_r($app);
if (isset($_POST)){
	if (isset($_POST['postAction'])){
		if ($_POST['postAction'] == 'authorization'){
			$app->authorization($_POST['login'], $_POST['password'],$app->uri);
		}
	}
}

if (isset($_GET)){
	if (isset($_GET['getAction'])){
		if ($_GET['getAction'] == 'logout'){
			$app->logout($_SERVER['REQUEST_URI']);
		}
	}
}

if (!empty($app->module['name'])){
	include (INC_PATH."{$app->module['name']}.module.inc.php");
}
else{
	if ($app->currentPage['template'] != ''){
		include (INC_PATH."{$app->currentPage['template']}.inc.php");
	}
}
include (INC_PATH."banners.inc.php");


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

$users_from_list = $db->select("SELECT * FROM users_from_list");
$smarty->assign("users_from_list",$users_from_list);

$smarty->assign("theme_path",$app->theme_path);

$smarty->assign("app",$app);

//print_r($app);

$smarty->assign("cart",$cart);

$categoriesMenu = get_products_categories(array("pid"=>2220,"lang"=>1));
//print_r($categoriesMenu);

$mainNav = $app->getMenu(0);
$smarty->assign("mainNav",$mainNav);

$sideNav = $categoriesMenu;
$smarty->assign("sideNav",$sideNav);

$smarty->display($app->smarty_display_file);
//print_r($app);

?>