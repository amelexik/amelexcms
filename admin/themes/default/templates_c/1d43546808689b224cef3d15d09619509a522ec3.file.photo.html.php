<?php /* Smarty version Smarty-3.0.6, created on 2011-04-12 15:21:39
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/photo.html" */ ?>
<?php /*%%SmartyHeaderCode:222634da443d335e149-11597839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d43546808689b224cef3d15d09619509a522ec3' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/photo.html',
      1 => 1302610898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222634da443d335e149-11597839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\server\root\pmatools\libs\smarty\plugins\modifier.date_format.php';
?><p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_photoalbum&structure_master_id=<?php echo $_GET['structure_master_id'];?>
">добавить  фотоальбом</a>
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
 $_from = $_smarty_tpl->getVariable('photoalbums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
?>
">
</td>
</td>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value['add_date'],"%d.%b.%Y");?>
</small></td>
" class="edit"></a></td>
&mode=add_edit_photoalbum&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="property"></a></td>
&gAction=drop_album&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="drop"></a></td>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>