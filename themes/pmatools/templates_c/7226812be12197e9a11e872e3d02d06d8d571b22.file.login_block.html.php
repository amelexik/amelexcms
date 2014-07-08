<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 11:45:54
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/login_block.html" */ ?>
<?php /*%%SmartyHeaderCode:6466825304f4b50d2a0b584-02437066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7226812be12197e9a11e872e3d02d06d8d571b22' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/login_block.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6466825304f4b50d2a0b584-02437066',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="login_block">
	<div class="informer_block">	
		
		<form method="post" id="quickLoginForm">
		
			<div class="informer_block_header" style="background:url(<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
img/login_block_header_ico.gif) no-repeat 5px center">авторизация</div><!-- .informer_block_header -->
			
			<?php if ($_SESSION['user']['is_logged']==true){?>
			<div class="informer_block_content">
				<p>Привет <span class="b"><?php echo $_SESSION['user']['name'];?>
!</span><br /><a href="?getAction=logout">выход</a></p>
			</div><!-- .informer_block_content -->
			
			<div class="informer_block_footer">
			</div><!-- .informer_block_footer -->
			<?php }else{ ?>
			
			
			<div class="informer_block_content">
				<table cellpadding="0" cellspacing="4" width="100%">
					<tr>
						<td><label for="login_input">Логин:</label></td>
						<td width="120"><input class="login_block_input" type="text" name="login" id="login_input" /></td>
					</tr>
					<tr>
						<td><label for="password_input">Пароль:</label></td>
						<td><input class="login_block_input" type="password" name="password" id="password_input" /></td>
					</tr>
				</table>
			</div><!-- .informer_block_content -->
			
			<div class="informer_block_footer">
				<table class="informer_block_footer_table">
					<tr>
						<td width="50%" align="left"><a href="/user/registration/">регистрация</a></td>
						<td width="50%" align="right"><button id="quickLoginSubmit" class="informer_button" name="postAction" value="authorization">Вход</button></td>
					</tr>
				</table>
			</div><!-- .informer_block_footer -->
			
			<?php }?>
			
			<div class="absBlock"></div><!-- .absBlock -->
		
		</form>
	</div><!-- .informer_block -->
</div><!-- .login_block -->