<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 09:53:48
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_album.html" */ ?>
<?php /*%%SmartyHeaderCode:146454da5487c65c1a5-18964161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b43b12c56e139e11c1910a4fa34e368c5ec924f' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_album.html',
      1 => 1168024430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146454da5487c65c1a5-18964161',
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