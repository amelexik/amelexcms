<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 21:37:19
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_album.html" */ ?>
<?php /*%%SmartyHeaderCode:9094459eb182cece83-05774843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc101d2795b17bda5c58e1bcd4fe445b80f5f1d0' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_album.html',
      1 => 1168028030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9094459eb182cece83-05774843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
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
"><b>Название альбома</b>:<br /><small>(язык: <?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
)</small></label></td>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>
" /></td>
" />