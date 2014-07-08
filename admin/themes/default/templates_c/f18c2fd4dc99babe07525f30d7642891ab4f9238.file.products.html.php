<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:18:55
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/products.html" */ ?>
<?php /*%%SmartyHeaderCode:12253789674ddb860f2b9f02-07073535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18c2fd4dc99babe07525f30d7642891ab4f9238' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/products.html',
      1 => 1303988604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12253789674ddb860f2b9f02-07073535',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p>	<a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=upload_price_list">загрузить прайс лист с продукцией</a></p><?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?><div id="langtabs">	<ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>			<li><a href="#lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>		<?php }} ?>	</ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>	<div id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">		<?php if ($_smarty_tpl->getVariable('categories')->value){?>		<table class="table" width="100%">			<thead>				<tr>					<td width="1%">#</td>					<td>Название категории</td>					<td width="1%"></td>				</tr>			</thead>			<tbody>				<?php if ($_smarty_tpl->getVariable('categories')->value){?>				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>				<tr class="display-<?php echo $_smarty_tpl->tpl_vars['category']->value['display'];?>
">					<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>					<td><a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&category_item_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['item_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</a></td>					<td><a class="edit" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['edit_url'];?>
"></a></td>				</tr>				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>				<?php }} ?>			<?php }?>			</tbody>		</table>		<?php }?>				<?php if ($_smarty_tpl->getVariable('products')->value){?>		<table class="table" width="100%">			<thead>				<tr>					<td width="1%">#</td>					<td>Название товара</td>					<td width="1%">Еврокод</td>					<td width="1%">Валюта</td>					<td width="1%">Курс</td>					<td width="1%">Оптовая цена</td>					<td width="1%">Розничная цена</td>					<td width="1%"></td>				</tr>			</thead>			<tbody>				<?php if ($_smarty_tpl->getVariable('products')->value){?>				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>				<tr class="display-<?php echo $_smarty_tpl->tpl_vars['product']->value['display'];?>
">					<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['product']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</td>					<td align="center"><?php if ($_smarty_tpl->tpl_vars['product']->value['eurocode']!=0){?><?php echo $_smarty_tpl->tpl_vars['product']->value['eurocode'];?>
<?php }else{ ?>-<?php }?></td>					<td align="center"><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
</td>					<td align="center"><b><?php echo $_smarty_tpl->tpl_vars['product']->value['rate'];?>
</b></td>					<td align="center"><?php echo $_smarty_tpl->tpl_vars['product']->value['trade_price'];?>
</td>					<td align="center"><?php echo $_smarty_tpl->tpl_vars['product']->value['retail_price'];?>
</td>					<td><a class="edit" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['edit_url'];?>
"></a></td>				</tr>				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>				<?php }} ?>			<?php }?>			</tbody>		</table>		<?php }?>					</div><!-- #lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
 -->	<?php }} ?></div><!-- #tabs --><?php }else{ ?>	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?><?php }?>