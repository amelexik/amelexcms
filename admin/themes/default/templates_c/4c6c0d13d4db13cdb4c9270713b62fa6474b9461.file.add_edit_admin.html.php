<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:29:27
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:708361344ddb8887346d44-96438465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6c0d13d4db13cdb4c9270713b62fa6474b9461' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_admin.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '708361344ddb8887346d44-96438465',
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