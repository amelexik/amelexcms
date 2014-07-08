<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 14:39:45
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cartoverlay.module.html" */ ?>
<?php /*%%SmartyHeaderCode:10929679464da58b811392a3-30723094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d48d68a14e583e0c9f2fd7672ce9b3a6516b78f' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cartoverlay.module.html',
      1 => 1302511817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10929679464da58b811392a3-30723094',
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
css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/cart-overlay.css" rel="stylesheet" type="text/css" />
	
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/jquery-1.5.1.js" language="javascript"></script>

	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	
	<script>
		$(document).ready(function(){
			//alert(12);
			$(".fancyCloseEl").click(function(){
				alert(1444);
			});
		});
	</script>
	
	
	<title><?php echo $_smarty_tpl->getVariable('app')->value->meta['title'];?>
</title>
</head>

<body>

<div id="mainContent">
	<h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_added_item'];?>
</h1>
	<?php if ($_smarty_tpl->getVariable('fullCart')->value){?>
	<div class="container">
		<p>
			<table class="table2 cart-table">
				<thead>
					<tr>
						<td width="1%">#</td>
						<td>Бренд</td>
						<td>Номер детали</td>
						<td>Наименование детали</td>
						<td>Код поставщика</td>
						<td>Цена</td>
						<td>кол. шт.</td>
						<td>сумма</td>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fullCart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['supplierCode'];?>
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
			</table>
		</p>
		
		<p style="text-align:right">
			<a class="button" target="_parent" href="/cart/"><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['go_to_cart'];?>
</a>
			<a class="button" target="_parent" href="/cart/order/"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_order'];?>
</a>
			<a class="button" target="_parent" href="/searchbycode/?code=<?php echo $_smarty_tpl->getVariable('cCode')->value;?>
"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_continue'];?>
 &#8594;</a>
		</p>
		
	</div><!-- .container -->
	<?php }?>
</div><!-- #cart-iframe -->


</body>

</html>