<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 13:22:59
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/cartoverlay.module.html" */ ?>
<?php /*%%SmartyHeaderCode:2455581464f4b67937a5443-42437783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6060549ddc9d466cabc243dfaebe7f10567955b' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/cartoverlay.module.html',
      1 => 1303988939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2455581464f4b67937a5443-42437783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/template.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/classes.css" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/cart-overlay.css" rel="stylesheet" type="text/css" />
	
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/jquery-1.5.1.js" language="javascript"></script>

	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	<title><?php echo $_smarty_tpl->getVariable('app')->value->meta['title'];?>
</title>
</head>

<body>

<div>
	<h1>Товар добавлен</h1>
	<?php if ($_smarty_tpl->getVariable('fullCart')->value){?>
		<p>
			<table class="table2 cart-table">
				<thead>
					<tr>
						<td width="1%">#</td>
						<td>Наименование детали</td>
						<td width="1%">Цена</td>
						<td width="1%">кол.</td>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fullCart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['item_title'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
					<?php }} ?>
				</tbody>
			</table>
		</p>
		
		<p style="text-align:right">
			<a class="button" target="_parent" href="/cart/">перейти в корзину</a>
			<a class="button" target="_parent" href="/cart/order/">оформить</a>
			<a class="button" target="_parent" href="<?php echo $_GET['back'];?>
">продолжить покупки &#8594;</a>
		</p>
		
	<?php }?>
</div><!-- #cart-iframe -->


</body>

</html>