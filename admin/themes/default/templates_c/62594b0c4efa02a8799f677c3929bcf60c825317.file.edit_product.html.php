<?php /* Smarty version Smarty-3.0.6, created on 2011-04-28 10:35:13
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_product.html" */ ?>
<?php /*%%SmartyHeaderCode:297554db918b18a0050-07908719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62594b0c4efa02a8799f677c3929bcf60c825317' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_product.html',
      1 => 1303914930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297554db918b18a0050-07908719',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

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
">Название товара:</label></td>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>
">Транслитерация:</label></td>
][translit]" id="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['translit'];?>
" /></td>
">Еденицы измерения:</label></td>
][units]" id="units_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['units'];?>
" /></td>
">Титл:</label></td>
][meta_title]" id="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_title'];?>
" /></td>
">Описание:</label></td>
][meta_description]" id="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_description'];?>
" /></td>
">Ключевые слова:</label></td>
][meta_keywords]" id="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_keywords'];?>
" /></td>
" /></td>
" /></td>
" /></td>
" /></td>
" />
" />
 $_from = $_smarty_tpl->getVariable('product')->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>
" style="padding:10px; position:relative">
100x/<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" />
" photo_id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
">Удалить [x]</a>
" method="post" enctype="multipart/form-data" id="form-demo" album_id="<?php echo $_GET['album_id'];?>
">