<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:13:28
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/siteconfig.html" */ ?>
<?php /*%%SmartyHeaderCode:5202677774ddb84c8927ea9-09340987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7f6aa59853c7287d2ceb9df0df7b085ad77163' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/siteconfig.html',
      1 => 1303988604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5202677774ddb84c8927ea9-09340987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post"><table class="form-table">	<tr>		<td width="200"><label for="admin_email">Email администратора</label></td>		<td><input type="text" name="config[admin_email]" id="admin_email" value="<?php echo $_smarty_tpl->getVariable('config')->value['admin_email'];?>
" /></td>	</tr>	<tr>		<td><label for="articles_count">Количество новостей на странице</label></td>		<td><input type="text" name="config[articles_count]" id="articles_count" value="<?php echo $_smarty_tpl->getVariable('config')->value['articles_count'];?>
" /></td>	</tr>	<tr>		<td><label for="euro_rate">Курс валюты для персчета цен (EUR)</label></td>		<td><input type="text" name="config[euro_rate]" id="euro_rate" value="<?php echo $_smarty_tpl->getVariable('config')->value['euro_rate'];?>
" /></td>	</tr>	<tr>		<td><label for="order_items_count_onpage">Количество покупок на 1 странице<br />(в админ-части)</label></td>		<td><input type="text" name="config[order_items_count_onpage]" id="order_items_count_onpage" value="<?php echo $_smarty_tpl->getVariable('config')->value['order_items_count_onpage'];?>
" /></td>	</tr>	<tr>		<td colspan="2">			<input type="hidden" name="pAction" value="update_config" />			<button class="button" type="submit">Отправить</button>				</td>	</tr></table></form>