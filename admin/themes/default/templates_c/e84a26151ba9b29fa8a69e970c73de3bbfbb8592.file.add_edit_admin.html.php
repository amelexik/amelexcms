<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 17:48:45
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:20544da441772cea09-22140750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84a26151ba9b29fa8a69e970c73de3bbfbb8592' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_admin.html',
      1 => 1302517820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20544da441772cea09-22140750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('errors')->value){?><div class="alert_block">	<p>Возникли ошибки:</p>	<ul class="ul">		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>		<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>		<?php }} ?>	</ul></div><?php }?><form method="post">	<table class="form-table">		<tr>			<td width="200"><label for="name">Имя:*</label></td>			<td><input type="text" name="name" id="name" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><?php echo $_smarty_tpl->getVariable('item')->value['name'];?>
<?php }else{ ?><?php echo $_POST['name'];?>
<?php }?>" /></td>		</tr>		<tr>			<td><label for="login">Логин:*</label></td>			<td><input <?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>disabled="disabled"<?php }else{ ?><?php }?> type="text" name="login" id="login" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><?php echo $_smarty_tpl->getVariable('item')->value['login'];?>
<?php }else{ ?><?php echo $_POST['login'];?>
<?php }?>" /></td>		</tr>		<tr>			<td><label for="password">Пароль:<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><?php }else{ ?>*<?php }?></label></td>			<td><input type="password" name="password" id="password" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><?php }else{ ?><?php echo $_POST['password'];?>
<?php }?>" /></td>		</tr>		<tr>			<td></td>			<td>				<input type="hidden" name="pAction" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>update_admin<?php }else{ ?>add_admin<?php }?>" />				<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><input type="hidden" name="admin_id" value="<?php echo $_smarty_tpl->getVariable('item')->value['id'];?>
" /><?php }?>				<button class="button" type="submit"><?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>Применить<?php }else{ ?>Добавить администратора<?php }?></button>			</td>		</tr>	</table></form><?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><p>*** Если поле <b>&laquo;пароль&raquo;</b> оставить пустое - пароль останется такой как и был. Будут оновленны только <b>Имя</b> и<b>Логин</b>.</p><?php }?>