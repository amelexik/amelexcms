<?php /* Smarty version Smarty-3.0.6, created on 2011-04-26 20:11:27
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/upload_price_list.html" */ ?>
<?php /*%%SmartyHeaderCode:11194da87eb528cbb0-30814250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c168406c6e2ae7e34447723e02b781defe546b61' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/upload_price_list.html',
      1 => 1302888116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11194da87eb528cbb0-30814250',
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