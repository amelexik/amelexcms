<?php /* Smarty version Smarty-3.0.6, created on 2011-04-20 09:45:30
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_static_content.html" */ ?>
<?php /*%%SmartyHeaderCode:185854da45b2752c930-54997713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8059b25708d1dce4d578e71f49b25898f7ff79aa' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_static_content.html',
      1 => 1302034028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185854da45b2752c930-54997713',
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