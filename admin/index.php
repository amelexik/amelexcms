<?
session_start();
error_reporting(E_WARNING || E_ERROR);
//error_reporting(E_ALL);

include ($_SERVER['DOCUMENT_ROOT'].'/sturtup.inc.php');

include (LIBS_PATH."functions.php");

include (ADMIN_INC_PATH."variables.inc.php");

include (ADMIN_ROOT."admin.class.php");
$admin = new Admin();

include (LIBS_PATH."smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = $admin->smarty_theme_path."/templates/";
$smarty->compile_dir = $admin->smarty_theme_path."/templates_c/";
$smarty->debugging = false;

if ($gAction == 'logout'){
	$admin->logout();
}

if ($admin->is_logged() == false){
	if ($pAction == 'login'){
		$admin->login($_SERVER['REQUEST_URI']);
	}
}
else{
	if (!empty($gSection)){
		include (ADMIN_INC_PATH."{$gSection}.inc.php");
		$smarty->assign("gSection",$gSection);
	}
}


$smarty->assign("admin",$admin);
$smarty->display($admin->smarty_display_file);
?>