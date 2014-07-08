<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 14:39:59
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/user_login_block.html" */ ?>
<?php /*%%SmartyHeaderCode:8678913754da58b8f4520a2-61923087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043426275d5e0d7c8b101ce59b5394621e4b09bf' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/user_login_block.html',
      1 => 1302511815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8678913754da58b8f4520a2-61923087',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="float_left user_block" id="loginBlock" style="width:200px">
	<div class="header"><?php if ($_SESSION['user']['is_logged']==true){?>Привет <b><?php echo $_SESSION['user']['name'];?>
</b><?php }else{ ?>авторизация<?php }?></div>
	<?php if ($_SESSION['user']['is_logged']==true){?>
	<div>
		<?php if ($_smarty_tpl->getVariable('add')->value->editProfileUrl){?><p><a href="<?php echo $_smarty_tpl->getVariable('app')->value->editProfileUrl;?>
">Редактировать профиль</a></p><?php }?>
		<p><a href="?getAction=logout">выход</a></p>
	</div>
	<?php }else{ ?>				
	<form method="post">
		<table class="table" width="185">
			<tr>
				<td><label class="label" for="login_input">логин:</label></td>
				<td align="right"><input class="input" type="text" name="login" id="login_input" /></td>
			</tr>
			<tr>
				<td><label class="label" for="password_input">пароль:</label></td>
				<td align="right"><input class="input" type="password" name="password" id="password_input" /></td>
			</tr>
			<tr>
				<td align="right" colspan="2" style="padding:3px 0 0 0">
				
				<a class="float_left" id="register_link" href="<?php echo $_smarty_tpl->getVariable('app')->value->registrationPageUrl;?>
">регистрация</a><!-- a href="#" class="float_righ button" id="login_submit">вход</a -->
				
				<button class="float_righ button" id="login_submit" type="submit">вход</button>
				</td>
			</tr>
		</table>
		<input type="hidden" name="postAction" value="authorization" />
	</form>
	<?php }?>
</div><!-- # login -->