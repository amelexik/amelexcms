<?php /* Smarty version Smarty-3.0.6, created on 2011-04-16 00:26:06
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/admins.html" */ ?>
<?php /*%%SmartyHeaderCode:21484da8b7eed60238-75633596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e0ea4f0c43339f03089a54f419d5332c203968' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/admins.html',
      1 => 1302247660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21484da8b7eed60238-75633596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" onclick="history.back()">&laquo; назад </a><?php if ($_SESSION['admin']['root']=='y'){?> <a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_admin">добавить пользователя</a><?php }?></p>
<?php if (!$_smarty_tpl->getVariable('admin')->value->mode){?>
<table class="table">
	<thead>
		<tr>
			<td width="1%">#</td>
			<td>имя</td>
			<td width="1%"></td>
		</tr>
	</thead>
	<tbody>
	<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
	<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admins')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['admin']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
<br /><br /><small>логин: <b><?php echo $_smarty_tpl->tpl_vars['admin']->value['login'];?>
</b></small></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['admin']->value['edit_url'];?>
" class="edit"></a></td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
	<?php }} ?>
	</tbody>
</table>
<?php }else{ ?>
	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }?>