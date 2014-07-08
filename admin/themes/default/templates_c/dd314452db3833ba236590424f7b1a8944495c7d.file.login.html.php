<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 19:54:25
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:267474da5d541809591-78440897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd314452db3833ba236590424f7b1a8944495c7d' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/login.html',
      1 => 1302034028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267474da5d541809591-78440897',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	
	<title>авторизация</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
	<meta name="Description" content="" /> 
	<meta name="Keywords" content="" /> 
	<meta name="language" content="" />  
	<link href="<?php echo $_smarty_tpl->getVariable('admin')->value->theme_path;?>
css/login.css" rel="stylesheet" type="text/css" />
</head> 
 
<body>

<table id="loginTable" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center" valign="middle">
		<form method="post">
			<table cellpadding="0" cellspacing="3" border="0">
				<tr>
					<td colspan="3">
					<img src="<?php echo $_smarty_tpl->getVariable('admin')->value->theme_path;?>
img/ms.jpg" />
					<p>введите ваш логин и пароль:</p>
					</td>
				</tr>
				<tr>
					<td><label>логин:<label></td>
					<td><label>пароль:<label></td>
					<td></td>
				</tr>
				<tr>
					<td><input class="input" type="text" name="login" /></td>
					<td><input class="input" type="password" name="password" /></td>
					<td><input id="submit" type="submit" name="login_button" value=" " /></td>
				</tr>
			</table>
			<input type="hidden" name="pAction" value="login" />
		</form>
		</td>
	</tr>
</table>

</body>
</html>