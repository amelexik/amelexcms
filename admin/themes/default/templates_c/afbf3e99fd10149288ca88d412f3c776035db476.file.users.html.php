<?php /* Smarty version Smarty-3.0.6, created on 2011-04-15 15:06:15
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/users.html" */ ?>
<?php /*%%SmartyHeaderCode:228604da834b7875757-54612129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afbf3e99fd10149288ca88d412f3c776035db476' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/users.html',
      1 => 1302034030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228604da834b7875757-54612129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" onclick="history.back()">&laquo; назад </a> <a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_user">добавить пользователя</a></p>
<?php if (!$_smarty_tpl->getVariable('admin')->value->mode){?>
<p>
	<table class="table">
		<thead>
			<tr>
				<td colspan="2">Статистика</td>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td width="1%">Всего пользователей на сайте:</td>
			<td><b><?php echo $_smarty_tpl->getVariable('usersCount')->value;?>
</b></td>
		</tr>
		<tr>
			<td>Откуда о вас узнали пользователи:</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('stats')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 - <b><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</b></li>
				<?php }} ?>
			</td>
		</tr>
		</tbody>
	</table>
</p>
<table class="table" width="100%">
	<thead>
		<tr>
			<td width="1%">#</td>
			<td>Имя пользователя</td>
			<td width="1%"></td>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
		<tr class="display-<?php echo $_smarty_tpl->tpl_vars['user']->value['active'];?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
			<td>
				<div><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
			</td>
			<td><a title="" class="edit" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_user&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></a></td>
		</tr>
		<?php }} ?>
	</tbody>
</table>
<?php }else{ ?>
	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }?>