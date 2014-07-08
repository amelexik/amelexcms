<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 14:39:59
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cart_informer.html" */ ?>
<?php /*%%SmartyHeaderCode:5370872714da58b8f4a9838-24894699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce8f55da61157e67a00ea2cda96b2f53f31d85e' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cart_informer.html',
      1 => 1302511820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5370872714da58b8f4a9838-24894699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="float_right user_block <?php if ($_smarty_tpl->getVariable('cart')->value->cartItemsCount>0){?>noEmpty<?php }?>" id="cartInformer">
	<div id="cart_content_wrapper">
		<div id="cart_content">
			<div class="header">корзина</div>
			<p class="cart_info cart_row">товаров: <span id="cartCount" class="b"><?php echo $_smarty_tpl->getVariable('cart')->value->cartItemsCount;?>
</span> шт.</p>
			<p class="cart_info cart_row">на сумму: <span id="cartTotalPrice" class="b"><?php echo $_smarty_tpl->getVariable('cart')->value->cartTotalPrice;?>
</span> UAN</p>
			<?php if ($_smarty_tpl->getVariable('cart')->value->cartItemsCount>0){?>
			<p class="cart_row">
				<a class="button" href="/cart/">пересчитать</a>
				<a class="button" href="/cart/order/">оформить</a>
			</p>
			<?php }?>
		</div><!-- #cart_content -->
	</div><!-- #cart_content_wrapper -->
</div><!-- #cart -->