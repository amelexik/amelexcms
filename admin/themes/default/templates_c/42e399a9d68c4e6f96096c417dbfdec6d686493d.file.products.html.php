<?php /* Smarty version Smarty-3.0.6, created on 2011-04-27 01:36:06
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/products.html" */ ?>
<?php /*%%SmartyHeaderCode:180314db748d6ec9cb0-33964620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e399a9d68c4e6f96096c417dbfdec6d686493d' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/products.html',
      1 => 1303857359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180314db748d6ec9cb0-33964620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=upload_price_list">загрузить прайс лист с продукцией</a></p>
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
">
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
">
</td>
&category_item_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['item_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</a></td>
"></a></td>
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
">
</td>
</td>
<?php }else{ ?>-<?php }?></td>
</td>
</b></td>
</td>
</td>
"></a></td>
 -->
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>