<?php /* Smarty version Smarty-3.0.6, created on 2011-05-11 12:51:51
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1491643144dca5c37316573-27777609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bfb8b3965e6b16ba66abab777a01b4070db2641' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/login.html',
      1 => 1303988588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491643144dca5c37316573-27777609',
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