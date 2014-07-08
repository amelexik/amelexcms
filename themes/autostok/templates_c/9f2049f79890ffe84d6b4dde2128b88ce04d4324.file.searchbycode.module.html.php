<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 12:38:59
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/searchbycode.module.html" */ ?>
<?php /*%%SmartyHeaderCode:17504568454da6c0b370df48-75229918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f2049f79890ffe84d6b4dde2128b88ce04d4324' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/searchbycode.module.html',
      1 => 1302511819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17504568454da6c0b370df48-75229918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1><?php echo $_smarty_tpl->getVariable('app')->value->meta['title'];?>
</h1>


<a style="display:none" href="/cartoverlay/?code=<?php echo $_GET['code'];?>
" id="fancyClick"></a>
<a style="display:none" id="clearCart" href="#"></a>
<a style="display:none" id="getCartCount"></a>
<a style="display:none" id="getCartTotalPrice"></a>


<p>
	<table width="100%" class="table2">
		<thead>
			<tr>
				<td>Бренд</td>
				<td>Номер детали</td>
				<td>Наименование детали</td>
				<td>Цена</td>
				<td>Курс</td>
				<td>Цена UAN</td>
				<td>Код поставщика</td>
				<td width="1%"></td>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->getVariable('result')->value){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Brand'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Number'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['Currency'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['rate'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ourPrice'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['SupplierCode'];?>
</td>
				<td align="center">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['inCart']){?>
						<a class="toCart added"></a>
					<?php }else{ ?>
						<a rel="basketIco" brand="<?php echo $_smarty_tpl->tpl_vars['item']->value['Brand'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
" number="<?php echo $_smarty_tpl->tpl_vars['item']->value['Number'];?>
" supplierCode="<?php echo $_smarty_tpl->tpl_vars['item']->value['SupplierCode'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
" currency="<?php echo $_smarty_tpl->tpl_vars['item']->value['Currency'];?>
" ourPrice="<?php echo $_smarty_tpl->tpl_vars['item']->value['ourPrice'];?>
" weight="<?php echo $_smarty_tpl->tpl_vars['item']->value['Weight'];?>
" class="toCart"></a>
					<?php }?>
				</td>
			</tr>
			<?php }} ?>
		<?php }else{ ?>
		<tr>
			<td colspan="12">
				<p style="font-size:18px"><b>Деталь не найдена :/</b></p>
			</td>
		</tr>
		<?php }?>
		</tbody>
	</table>
</p>
<p>
	<form>
		<input type="text" name="code" class="textInput" value="<?php echo $_GET['code'];?>
" /> <button class="button" class="button" type="submit">поиск по коду &raquo;</button>
	</form>
</p>