<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:35:22
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_static_content.html" */ ?>
<?php /*%%SmartyHeaderCode:17607777994ddb89ea906d41-61596841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e29d337a04385609b98de35509a747b450965574' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_static_content.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17607777994ddb89ea906d41-61596841',
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
]" id="pageContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('content')->value[$_smarty_tpl->tpl_vars['lang_id']->value];?>
</textarea>
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
 = CKEDITOR.replace( 'pageContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',
&parent_id=<?php echo $_GET['parent_id'];?>
">отмена</a>