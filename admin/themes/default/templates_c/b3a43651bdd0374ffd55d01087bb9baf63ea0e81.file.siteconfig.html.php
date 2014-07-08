<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 14:49:54
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/siteconfig.html" */ ?>
<?php /*%%SmartyHeaderCode:324924dad76e2b796b6-90360079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a43651bdd0374ffd55d01087bb9baf63ea0e81' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/siteconfig.html',
      1 => 1303147592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324924dad76e2b796b6-90360079',
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