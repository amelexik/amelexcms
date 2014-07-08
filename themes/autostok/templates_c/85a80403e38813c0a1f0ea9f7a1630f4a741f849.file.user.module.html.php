<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 09:08:57
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/user.module.html" */ ?>
<?php /*%%SmartyHeaderCode:20097281784da68f799850d6-11711388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a80403e38813c0a1f0ea9f7a1630f4a741f849' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/user.module.html',
      1 => 1302511818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20097281784da68f799850d6-11711388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']==''||$_smarty_tpl->getVariable('app')->value->module['mode']=='registration'){?>
	<?php ob_start(); ?><?php echo $_smarty_tpl->getVariable('app')->value->constants['reg_form']['page_header_reg'];?>
<?php  Smarty::$_smarty_vars['capture']['h1']=ob_get_clean();?>
	<?php ob_start(); ?><?php echo $_smarty_tpl->getVariable('app')->value->constants['reg_form']['page_header_reg'];?>
<?php  Smarty::$_smarty_vars['capture']['submit_title']=ob_get_clean();?>
	<?php ob_start(); ?>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<?php  Smarty::$_smarty_vars['capture']['uContent']=ob_get_clean();?>
<?php }?>

<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=='editprofile'){?>
	<?php ob_start(); ?><?php echo $_smarty_tpl->getVariable('app')->value->constants['reg_form']['page_header_editprofile'];?>
<?php  Smarty::$_smarty_vars['capture']['h1']=ob_get_clean();?>
	<?php ob_start(); ?><?php echo $_smarty_tpl->getVariable('app')->value->constants['reg_form']['page_header_editprofile'];?>
<?php  Smarty::$_smarty_vars['capture']['submit_title']=ob_get_clean();?>
<?php }?>





<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']==''||$_smarty_tpl->getVariable('app')->value->module['mode']=='registration'||$_smarty_tpl->getVariable('app')->value->module['mode']=='editprofile'){?>
	<h1><?php echo Smarty::$_smarty_vars['capture']['h1'];?>
</h1>
	<?php if (Smarty::$_smarty_vars['capture']['uContent']){?><p><?php echo Smarty::$_smarty_vars['capture']['uContent'];?>
</p><?php }?>
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