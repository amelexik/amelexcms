<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 14:18:10
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/upload_price_list.html" */ ?>
<?php /*%%SmartyHeaderCode:134164dad6f72bb3682-60763512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ff983923ea3216436ddb51e072d183b769ca71' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/upload_price_list.html',
      1 => 1302888116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134164dad6f72bb3682-60763512',
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