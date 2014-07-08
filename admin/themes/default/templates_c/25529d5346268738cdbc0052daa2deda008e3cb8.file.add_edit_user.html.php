<?php /* Smarty version Smarty-3.0.6, created on 2012-03-02 20:02:23
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_user.html" */ ?>
<?php /*%%SmartyHeaderCode:18623093424f510b2f664cb3-59633545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25529d5346268738cdbc0052daa2deda008e3cb8' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_user.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18623093424f510b2f664cb3-59633545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
	<table class="form-table">
		<tr>
			<td width="200"><label for="name">Имя:*</label></td>
			<td><input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->getVariable('userData')->value['name'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="login">Логин:*</label></td>
			<td><input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->getVariable('userData')->value['login'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="city">Город:*</label></td>
			<td><input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->getVariable('userData')->value['city'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="phone_num">Номер телефона:*</label></td>
			<td><input type="text" name="phone_num" id="phone_num" value="<?php echo $_smarty_tpl->getVariable('userData')->value['phone_num'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="costumer_type">Тип клиента:*</label></td>
			<td>
				<select name="costumer_type" id="costumer_type">
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['costumer_type']=="retail_buyer"){?> selected="selected" <?php }?> value="retail_buyer">розничный покупатель</option>
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['costumer_type']=="legal_entity"){?> selected="legal_entity" <?php }?> value="legal_entity">юридическое лицо</option>
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['costumer_type']=="individual"){?> selected="individual" <?php }?> value="individual">физичиское лицо</option>
				</select>			
			</td>
		</tr>
		<tr>
			<td><label for="user_price">Цена продукции для клиента:*</label></td>
			<td>
				<select name="user_price" id="user_price">
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['user_price']=="trade_price"){?> selected="selected" <?php }?> value="trade_price">Оптовая</option>
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['user_price']=="retail_price"){?> selected="selected" <?php }?> value="retail_price">Розничная</option>
				</select>
			</td>
		</tr>
		<?php if ($_smarty_tpl->getVariable('userData')->value['costumer_type']=="legal_entity"){?>
		<tr>
			<td><label for="company">company:*</label></td>
			<td><input type="text" name="company" id="company" value="<?php echo $_smarty_tpl->getVariable('userData')->value['company'];?>
" /></td>
		</tr>
		<?php }?>
		<tr>
			<td><label for="password">Пароль:*</label></td>
			<td><input type="password" name="password" id="password" value="" /></td>
		</tr>
		<tr>
			<td><label for="email">Електронная почта:*</label></td>
			<td><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->getVariable('userData')->value['email'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="active">Статус:*</label></td>
			<td>
				<select name="active">
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['active']=='y'){?>selected="selected"<?php }?> value="y">активен</option>
					<option <?php if ($_smarty_tpl->getVariable('userData')->value['active']=='n'){?>selected="selected"<?php }?> value="n">неактивен</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="email"><b>Скидка на продукцию %:</b></label></td>
			<td><input type="text" name="discount" id="discount" value="<?php echo $_smarty_tpl->getVariable('userData')->value['discount'];?>
" /></td>
		</tr>
		<tr>
			<td>
				<?php if ($_smarty_tpl->getVariable('userData')->value['id']>0){?><input type="hidden" name="pAction" value="update_user" /><?php }else{ ?><input type="hidden" name="pAction" value="add_user" /><?php }?>
				<input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>
" />
			</td>
			<td><button class="button" type="submit"><?php if ($_smarty_tpl->getVariable('userData')->value['id']>0){?>Отправить<?php }else{ ?>Добавить<?php }?></button></td>
		</tr>
	</table>
</form>