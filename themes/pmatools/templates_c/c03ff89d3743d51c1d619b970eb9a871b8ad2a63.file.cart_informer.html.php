<?php /* Smarty version Smarty-3.0.6, created on 2012-02-28 12:38:47
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/cart_informer.html" */ ?>
<?php /*%%SmartyHeaderCode:6606702444f4caeb7da4213-65543855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03ff89d3743d51c1d619b970eb9a871b8ad2a63' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/cart_informer.html',
      1 => 1330425412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6606702444f4caeb7da4213-65543855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="cart_informer">
	<div class="informer_block">
		<div class="informer_block_header" style="background:url(<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
img/cart_informer_header_ico.gif) no-repeat 5px center">корзина</div><!-- .informer_block_header -->
		<div class="informer_block_content">
			<p class="cart_informer_rov">Товаров: <span id="cartCount" class="b"><?php echo $_smarty_tpl->getVariable('cart')->value->cartItemsCount;?>
</span> шт.</p>
			<p class="cart_informer_rov">На сумму: <span id="cartTotalPrice" class="b"><?php echo $_smarty_tpl->getVariable('cart')->value->cartTotalPrice;?>
</span> грн.</p>
		</div><!-- .informer_block_content -->
		
		<div class="informer_block_footer">
			<div class="float_left"></div>
			<div class="float_right"></div>
			<div class="clear"></div>
			<table class="informer_block_footer_table">
				<tr>
					<td width="50%" align="left" style="padding:0 2px 0 0"><a style="" class="informer_button" href="/cart/">пересчитать</a></td>
					<td width="50%" align="right" style="padding:0 0 0 2px"><a style="" class="informer_button" href="/cart/order/">оформить</a></td>
				</tr>
			</table>
		</div><!-- .informer_block_footer -->
	
		<div class="absBlock"></div><!-- .absBlock -->
	</div><!-- .informer_block -->
</div><!-- #cart_informer -->