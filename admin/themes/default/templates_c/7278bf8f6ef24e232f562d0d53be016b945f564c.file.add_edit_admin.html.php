<?php /* Smarty version Smarty-3.0.6, created on 2007-01-05 21:49:15
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:19329459eabbb66e241-87898136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7278bf8f6ef24e232f562d0d53be016b945f564c' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_admin.html',
      1 => 1302517820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19329459eabbb66e241-87898136',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('errors')->value){?>
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
</li>
<?php }else{ ?><?php echo $_POST['name'];?>
<?php }?>" /></td>
<?php }else{ ?><?php echo $_POST['login'];?>
<?php }?>" /></td>
<?php }?>" /></td>
" /><?php }?>