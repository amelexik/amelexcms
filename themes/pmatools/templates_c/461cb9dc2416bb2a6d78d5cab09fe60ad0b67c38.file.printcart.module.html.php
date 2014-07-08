<?php /* Smarty version Smarty-3.0.6, created on 2012-03-04 12:57:58
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/printcart.module.html" */ ?>
<?php /*%%SmartyHeaderCode:1112076674f534ab65732b5-71298951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '461cb9dc2416bb2a6d78d5cab09fe60ad0b67c38' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/printcart.module.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1112076674f534ab65732b5-71298951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<title><?php echo $_smarty_tpl->getVariable('app')->value->meta['title'];?>
</title>
	<meta name="distribution" content="global" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/printcart.module.css" rel="stylesheet" type="text/css" />
</head>

<body>

<input type="button" id="printPageButton" value="Напечатать страницу" onClick="window.print()">

<table width="100%" cellspacing="0" cellpadding="4" border="1">
	<thead>
		<tr>
			<th width="1%">#</th>
			<th>Бренд</th>
			<th>Номер детали</th>
			<th>Наименование детали</th>
			<th width="1%">Цена</th>
			<th width="1%">кол.</th>
			<th width="1%">сумма, грн</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION['orderData']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['totalPrice'];?>
</td>
		</tr>
		<?php }} ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="8">
				<div style="float:left">
				</div>
				<div style="float:right">итого: <b style="font-size:18px"><?php echo $_SESSION['orderData']['cart_total_price'];?>
 UAN</b></div>
			</td>
		</tr>
	</tfoot>
</table>

</body>

</html>