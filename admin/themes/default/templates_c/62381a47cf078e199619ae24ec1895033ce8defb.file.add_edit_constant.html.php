<?php /* Smarty version Smarty-3.0.6, created on 2011-05-25 12:56:18
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_constant.html" */ ?>
<?php /*%%SmartyHeaderCode:6544785934ddcd24261f176-56141289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62381a47cf078e199619ae24ec1895033ce8defb' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_constant.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6544785934ddcd24261f176-56141289',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
	<p>Добавить новую константу в групу <b>&laquo;<?php echo $_smarty_tpl->getVariable('group_title')->value;?>
&raquo;</b></p>
	<div id="langtabs">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
				<li><a href="#lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>
			<?php }} ?>
		</ul>
		
		<div class="langtab_div">
			<table class="form-table">
				<tr>
					<td width="150"><label for="title"><b>Титл:</b></label></td>
					<td><input type="text" name="item[title]" id="title" value="" /></td>
				</tr>
				<tr>
					<td><label for="name">Системное название:</label></td>
					<td><input type="text" name="item[name]" id="name" value="" /></td>
				</tr>
			</table>
		</div>
		
		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
		<div class="langtab_div" id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
			<table class="form-table">
				<tr>
					<td width="150"><label for="value_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Значение:</label></td>
					<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][value]" id="value_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="" /></td>
				</tr>
			</table>
		</div>
		<?php }} ?>
		
		<div class="langtab_div">
			<input type="hidden" name="pAction" value="add_constant" />
			<button class="button" type="submit">Добавить константу</button>
		</div>
		
	</div>
</form>