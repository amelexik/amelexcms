<?php /* Smarty version Smarty-3.0.6, created on 2011-04-28 11:20:14
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/catalog_start_page_data.html" */ ?>
<?php /*%%SmartyHeaderCode:170954db9233e9e3920-76159845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b9bf62983c0318609d37d25c361cd5a220f372' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/catalog_start_page_data.html',
      1 => 1303978814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170954db9233e9e3920-76159845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Текст и Мета данные главной страницы каталога</h1>
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
">Титл:</label></td>
][meta_title]" id="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('catalog_start_page')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_title'];?>
" /></td>
">Описание:</label></td>
][meta_description]" id="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('catalog_start_page')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_description'];?>
" /></td>
">Ключевые слова:</label></td>
][meta_keywords]" id="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('catalog_start_page')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_keywords'];?>
" /></td>
">Текстовый контент:</label></td>
][static_content]" id="static_content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('catalog_start_page')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['static_content'];?>
</textarea></td>
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
 = CKEDITOR.replace( 'static_content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',