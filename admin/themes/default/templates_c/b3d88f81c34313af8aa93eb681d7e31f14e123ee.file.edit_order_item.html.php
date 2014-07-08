<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 15:17:10
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_order_item.html" */ ?>
<?php /*%%SmartyHeaderCode:54794dad7d46483251-08400403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d88f81c34313af8aa93eb681d7e31f14e123ee' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_order_item.html',
      1 => 1303215430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54794dad7d46483251-08400403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Редактирование заказа №<?php echo $_smarty_tpl->getVariable('orderData')->value['id'];?>
</h1><h1 class="orderStatus <?php echo $_smarty_tpl->getVariable('orderData')->value['status'];?>
">заказ 				<?php if ($_smarty_tpl->getVariable('orderData')->value['status']=="none"){?>не рассмотрен<?php }?><?php if ($_smarty_tpl->getVariable('orderData')->value['status']=="processed"){?>в процессе<?php }?><?php if ($_smarty_tpl->getVariable('orderData')->value['status']=="completed"){?>выполнен<?php }?></h1><fieldset>	<legend>Статус заказа</legend>	<form method="post">		<p>			<select name="order_status" id="">				<option value="none">Не разсмотрен</option>				<option value="processed">Выполняется</option>				<option value="completed">Выполнен</option>			</select>			<input type="hidden" name="pAction" value="update_order_item_status" />			<input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->getVariable('orderData')->value['id'];?>
" />			<button style="padding:0; height:auto" type="submit" name="submit_mode" value="set">применить</button> или 			<button style="padding:0; height:auto" type="submit" name="submit_mode" value="save">сохранить</button>		</p>	</form></fieldset><fieldset>	<legend>Информация о заказе</legend>	<table class="table">		<tr>			<td width="150">Имя пользователя:</td>			<td><?php echo $_smarty_tpl->getVariable('userData')->value['name'];?>
</td>		</tr>		<tr>			<td>Тип покупателя:</td>			<td>				<?php if ($_smarty_tpl->getVariable('userData')->value['user_type']=="simple"){?>				не зарегестрирован на сайте(розничный покупатель)				<?php }else{ ?>				зарегестрирован на сайте				<?php }?>			</td>		</tr>		<tr>			<td>Метод доставки:</td>			<td><?php echo $_smarty_tpl->getVariable('orderData')->value['delivery_method'];?>
</td>		</tr>		<tr>			<td>Метод оплаты:</td>			<td><?php echo $_smarty_tpl->getVariable('orderData')->value['payment_method'];?>
</td>		</tr>		<tr>			<td>Удобное время доставки:</td>			<td><?php echo $_smarty_tpl->getVariable('orderData')->value['time_of_delivery'];?>
</td>		</tr>		<tr>			<td>Коментарий:</td>			<td><?php echo $_smarty_tpl->getVariable('orderData')->value['comments'];?>
</td>		</tr>	</table></fieldset><fieldset>	<legend>Информация о заказаных товарах</legend>	<table class="table">		<?php if ($_smarty_tpl->getVariable('orderItemsData')->value){?>			<thead>				<tr>					<td width="1%">#</td>					<td>артикул</td>					<td>описание</td>					<td>Оптовая цена<br />на момент покупки</td>					<td>Розничная цена<br />на момент покупки</td>					<td>курс валюты<br />на момент покупки</td>					<td width="1%">количество</td>					<td>цена<br />на момент покупки</td>					<td>всего<br />на момент покупки</td>				</tr>			</thead>			<tbody>				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, null);?>				<?php  $_smarty_tpl->tpl_vars['orderItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orderItemsData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['orderItem']->key => $_smarty_tpl->tpl_vars['orderItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['orderItem']->key;
?>				<tr>					<td><?php echo $_smarty_tpl->getVariable('i')->value;?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['articul'];?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['name'];?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['trade_price'];?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['retail_price'];?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['rate'];?>
</td>					<td align="center"><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['quantity'];?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['price'];?>
 UAN</td>					<td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['total_price'];?>
 UAN</td>				</tr>				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>				<?php }} ?>				<tr>					<td colspan="9" align="right">итого: <b style="font-size:16px"><?php echo $_smarty_tpl->getVariable('orderTotalPrice')->value;?>
</b> UAN</td>				</tr>			</tbody>		<?php }?>	</table></fieldset>