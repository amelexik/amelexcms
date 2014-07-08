<?php
session_start();
error_reporting(E_WARNING || E_ERROR);
//error_reporting(E_ALL);

include ($_SERVER["DOCUMENT_ROOT"]."/sturtup.inc.php");

require_once LIBS_PATH."dbsimple/config.php";
require_once LIBS_PATH."dbsimple/DbSimple/Generic.php";
$db = DbSimple_Generic::connect("mysql://web20_user:gbpltw@localhost/web20_db");
//$db = DbSimple_Generic::connect("mysql://root:1@localhost/autostok");

include (LIBS_PATH."phpmailer/class.phpmailer.php");
include (LIBS_PATH."functions.php");

$phpmailer = new PHPMailer();

//print_r($_SESSION);
//captcha_keystring

$errors = array();
$content = "";

$ip = $_SERVER["REMOTE_ADDR"];

if (!empty($_POST)){
	
	$name = clearvar($_POST["name"]);
	$email = clearvar($_POST["email"]);
	$code = clearvar($_POST["code"]);
	$message = clearvar($_POST["message"]);
	
	if (empty($name)){
		$errors["name"] = "Не указано имя";
	}
	if (empty($email)){
		$errors["email"] = "Не указан EMAIL адресс";
	}
	else{
		if (check_email($email) == false){
			$errors["email"] = "Не корректный EMAIL адресс";
		}
	}
	if (empty($code)){
		$errors["code"] = "Не введен проверочный код";
	}
	else{
		if ($code != $_SESSION["captcha_keystring"]){
			$errors["code"] = "Неверный проверочный код";
		}
	}
	if (empty($message)){
		$errors["message"] = "Текст сообщения слишком короткый";
	}
	
	if(empty($errors)){
		
		$content.="Имя: ".$name."\n";
		$content.="Email адресс: ".$email."\n";
		$content.="Текст сообщения: ".$message."\n";
		$content.="IP адресс отправителя: ".$ip."\n";
		
		//echo "<pre>".$content."</pre>";
		
		$phpmailer->IsMAIL();
		//$mmail->Host     = "";
		//$mmail->SMTPAuth = true;
		//$mmail->Username = "";
		//$mmail->Password = "";
		$phpmailer->From = "noreplay@".$_SERVER["SERVER_NAME"];
		$phpmailer->FromName = "Форма обратной связи";
		$phpmailer->ContentType = "text/plain";
		$phpmailer->CharSet = 'UTF-8';
		$phpmailer->IsHTML(false);
		$phpmailer->Subject = "Сообщение с сайта www.".$_SERVER["HTTP_HOST"];
		$phpmailer->Body = $content;
		
		$email = getConfig('admin_email');
		
		// 1
		$phpmailer->AddAddress($email);
		$phpmailer->Send();
		$phpmailer->ClearAddresses();
	}
	
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<title>Отправка сообщения</title>
	<style type="text/css">
	
	html,body
	{
		font-family:Tahoma,Verdana;
		font-size:13px;
	}
	
	h1
	{
		font-size:18px;
	}
	
	</style>
</head>
<body>

<?

if (!empty($errors)){
	echo "<h1>При попытке отпраки сообщения возникли ошибки:</h1>\n";
	echo "<ul>\n";
	foreach ($errors as $key => $value){
		echo "<li>{$value}</li>\n";
	}
	echo "</ul>\n";
}
else{
	echo '<h1>Сообщение успрешно отправленно!</h1>';
	echo '<script>setTimeout("window.close()",3000);</script>';
	echo '<p>Это окно закроется автоматически через несколько секунд <a href="#" onclick="window.close()">Закрыть это окно</a></p>';
}

?>

</body>

</html>