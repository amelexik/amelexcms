<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 13:17:57
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/registration_form.html" */ ?>
<?php /*%%SmartyHeaderCode:21462279894f4b6665082289-04542006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb9ad0330660b7c7e6200f486be28d117b7822f' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/registration_form.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21462279894f4b6665082289-04542006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
	<form method="post" id="registration" class="form" action="/user/registration/">
	
	<?php if ($_smarty_tpl->getVariable('errors')->value){?>
		<div class="alert_block">
			<p><b>В прецессе регистрации произошли следущие ошибки:</b></p>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['error_info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['error_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error_info']->key => $_smarty_tpl->tpl_vars['error_info']->value){
 $_smarty_tpl->tpl_vars['error_key']->value = $_smarty_tpl->tpl_vars['error_info']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error_info']->value;?>
</li>
				<?php }} ?>
			</ul>
		</div><!-- .alert_block -->
	<?php }?>

	<table width="100%" cellspacing="8" border="0">
		<tr>
			<td width="1%"><label for="login"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_login'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="login" id="login" value="<?php echo $_POST['login'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="name"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_imya'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="city"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_gorod'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="city" id="city" value="<?php echo $_POST['city'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="register_costumer_type"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_klient'];?>
:<sup style="color:red">*</sup></label></td>
			<td>
				<select name="costumer_type" id="register_costumer_type">
					<option value="none">.....</option>
					<option <?php if ($_POST['costumer_type']=="legal_entity"){?> selected="legal_entity" <?php }?> value="legal_entity">юридическое лицо</option>
					<option <?php if ($_POST['costumer_type']=="individual"){?> selected="individual" <?php }?> value="individual">физичиское лицо</option>
				</select>
			</td>
		</tr>
		
		
		<!-- # company -->
		<tr id="company_row_reg_table" style="display:">
			<td><label for="company"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_firma'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="company" id="company" value="<?php echo $_POST['company'];?>
" /></td>
		</tr>
		<!-- #company -->
		
		<tr>
			<td><label for="phone_num"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_telefon'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="phone_num" id="phone_num" value="<?php echo $_POST['phone_num'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="email"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_email'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="password"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_parol'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="password" name="password" id="password" value="<?php echo $_POST['password'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="password2"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_parol2'];?>
:<sup style="color:red">*</sup></label></td>
			<td><input type="password" name="password2" id="password2" value="<?php echo $_POST['password2'];?>
" /></td>
		</tr>
		<tr>
			<td><label for="from_user"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_otkuda_uznali'];?>
:<sup style="color:red">*</sup></label></td>
			<td>
				<select name="from_user" id="from_user">
					<option value="">...</option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users_from_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
					<?php }} ?>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="middle"><label for="code"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['pole_kapcha'];?>
:<sup style="color:red">*</sup></label></td>
			<td>
				<p>
					<div id="captcha">
						<table id="captchaTable">
							<tr><td align="center"><div id="captchaImageContainer"><img id="captchaImage" src="/libs/kcaptcha/index.php" /></div><!-- #captchaImageContainer --></td></tr>
						</table>
					</div>
				</p>
				<p><input type="text" name="code" id="code" value="" /></p>
			</td>
		</tr>
		<tr>
			<td><input type="hidden" name="postAction" value="register" /></td>
			<td><button class="button" type="submit"><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['knopka_registraciya'];?>
</button></td>
		</tr>
	</table>
	</form>
</div><!-- -->