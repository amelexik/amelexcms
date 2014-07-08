<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 23:17:05
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:9876627414da604c144c397-39742308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2acdcc3f758a215ad91cddb6ed8c5edc4835fd9b' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/feedback.html',
      1 => 1302591156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9876627414da604c144c397-39742308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="margin:0 0 0 0"><?php echo $_smarty_tpl->getVariable('content')->value;?>
</div><h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['header'];?>
</h1><div class="container" style="margin:0">		<form target="sender" method="post" class="form" id="feedBackForm" action="/postmessage/" onsubmit="winOpen('about:blank','sender',500,500)">		<table width="100%" cellspacing="2" border="0">			<tr>				<td width="1%"><label for="name"><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['label_name'];?>
:*</label></td>				<td><input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>
" /></td>			</tr>			<tr>				<td><label for="email"><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['label_email'];?>
:*</label></td>				<td><input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" /></td>			</tr>			<tr>				<td><label for="message"><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['label_message'];?>
:*</label></td>				<td>					<textarea id="message" name="message"></textarea>				</td>			</tr>			<tr>				<td valign="middle"><label for="code"><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['label_kcaptcha'];?>
:*</label></td>				<td>					<p id="kcaptcha"><img src="/libs/kcaptcha/index.php" /></p>					<p><input type="text" name="code" id="code" value="" /></p>				</td>			</tr>			<tr>				<td><input type="hidden" name="postAction" value="register" /></td>				<td><button id="" class="button" type="submit"><?php echo $_smarty_tpl->getVariable('app')->value->constants['feedback_form']['label_submit'];?>
</button></td>			</tr>		</table>	</form></div>