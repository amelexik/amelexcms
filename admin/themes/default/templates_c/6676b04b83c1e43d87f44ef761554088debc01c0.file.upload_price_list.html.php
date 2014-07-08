<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:24:35
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/upload_price_list.html" */ ?>
<?php /*%%SmartyHeaderCode:6601009874ddb8763c82c47-41694627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6676b04b83c1e43d87f44ef761554088debc01c0' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/upload_price_list.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6601009874ddb8763c82c47-41694627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Нажмите "обзор" и загрузите CSV файл</legend>
		<p><input type="file" name="pricelist" /></p>
		<p><button type="submit" name="pAction" value="load_price_list">Загрузить файл</button></p>
	</fieldset>
</form>