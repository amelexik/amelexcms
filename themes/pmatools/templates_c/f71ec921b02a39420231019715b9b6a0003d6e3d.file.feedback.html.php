<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 11:48:37
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:6111057544f4b5175194c17-52666459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71ec921b02a39420231019715b9b6a0003d6e3d' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/feedback.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6111057544f4b5175194c17-52666459',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="margin:0 0 20px 0"><?php echo $_smarty_tpl->getVariable('content')->value;?>
</div><h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['zaglavie_formy'];?>
</h1>	<form target="sender" method="post" class="form" id="feedBackForm" action="/postmessage/" onsubmit="winOpen('about:blank','sender',500,500)">		<table width="100%" cellspacing="8" border="0">			<tr>				<td width="1%"><label for="name"><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['pole_imya'];?>
:<sup style="color:red">*</sup></label></td>				<td><input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>
" /></td>			</tr>			<tr>				<td><label for="email"><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['pole_email'];?>
:<sup style="color:red">*</sup></label></td>				<td><input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" /></td>			</tr>			<tr>				<td><label for="message"><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['pole_soobschenie'];?>
:<sup style="color:red">*</sup></label></td>				<td>					<textarea id="message" name="message"></textarea>				</td>			</tr>			<tr>				<td valign="middle"><label for="code"><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['pole_kapcha'];?>
:<sup style="color:red">*</sup></label></td>				<td>					<p id="kcaptcha"><img src="/libs/kcaptcha/index.php" /></p>					<p><input style="width:94px;" type="text" name="code" id="code" value="" /></p>				</td>			</tr>			<tr>				<td><input type="hidden" name="postAction" value="register" /></td>				<td><button id="" class="button" type="submit"><?php echo $_smarty_tpl->getVariable('app')->value->constants['forma_obratnoj_svyazi']['knopka_otpravki_soobscheniya'];?>
</button></td>			</tr>		</table>	</form>