<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 14:57:50
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/user.module.html" */ ?>
<?php /*%%SmartyHeaderCode:2052605774f4b7dceedb1e3-85901748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6cfa041e611d8b93d5e75afff7a377667d8349d' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/user.module.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052605774f4b7dceedb1e3-85901748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']==''||$_smarty_tpl->getVariable('app')->value->module['mode']=='registration'){?>
	<h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['registraciya_na_sajte']['zaglavie_stranicy'];?>
</h1>
	<div><?php $_template = new Smarty_Internal_Template("registration_form.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div><!-- container -->
<?php }?>

<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=='registrationfinish'){?>

<h1>Регистрация завершена</h1>
<div class="info_block">
		<p>Регистрация на сайте <b><?php echo $_SERVER['http_host'];?>
</b> успешно пройдена.</p>
		<p>Теперь вы можете ввойти на сайт через ниже поданую фому:</p>
</div>
<br /><br />
<div class="container">
	<form method="post" class="form" action="/">
		<input type="hidden" name="postAction" value="authorization" />
		<table width="300">
			<tr>
				<td width="1%"><label for="login1">ваш логин:</label></td>
				<td><input type="text" name="login" id="login1" /></td>
			</tr>
			<tr>
				<td><label for="password1">пароль:</label></td>
				<td><input type="password" name="password" id="password1" /></td>
			</tr>
			<tr>
				<td width="1%" align="left"></td>
				<td align="right"><button class="button">ввойти &raquo;</button></td>
			</tr>
		</table>
	</form>
</div>

<?php }?>