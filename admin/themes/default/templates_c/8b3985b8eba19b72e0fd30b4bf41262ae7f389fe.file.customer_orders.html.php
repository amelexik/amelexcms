<?php /* Smarty version Smarty-3.0.6, created on 2012-03-06 19:59:37
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/customer_orders.html" */ ?>
<?php /*%%SmartyHeaderCode:18647046934f565089d34ef9-09821883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3985b8eba19b72e0fd30b4bf41262ae7f389fe' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/customer_orders.html',
      1 => 1331036264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18647046934f565089d34ef9-09821883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?>
<table class="table" width="100%">
	<thead>
		<tr>
			<td width="1%">№</td>
			<td width="1%">Состояние<br />заказа</td>
			<td>Имя пользователя</td>
			<td width="1%">E-mail</td>
			<td width="1%">Дата заказа</td>
			<td width="1%">phone</td>
			<td width="1%" colspan="2"></td>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['orderItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orders')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['orderItem']->key => $_smarty_tpl->tpl_vars['orderItem']->value){
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['orderItem']->key;
?>
		<tr class="1order-status-<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['status'];?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['id'];?>
</td>
			<td>
				<a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['edit_url'];?>
"><span class="orderStatus <?php echo $_smarty_tpl->tpl_vars['orderItem']->value['status'];?>
"></span>
				<div align="center"><small>
					<?php if ($_smarty_tpl->tpl_vars['orderItem']->value['status']=="none"){?>не рассмотрен<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['orderItem']->value['status']=="processed"){?>в процессе<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['orderItem']->value['status']=="completed"){?>выполнен<?php }?>
				</small></div>
				</a>
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['user_name'];?>
</td>
			<td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['user_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['user_email'];?>
</a></td>
			<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['date'];?>
</td>
			<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['user_phone'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['edit_url'];?>
" class="edit"></a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['drop_url'];?>
" class="drop"></a></td>
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
