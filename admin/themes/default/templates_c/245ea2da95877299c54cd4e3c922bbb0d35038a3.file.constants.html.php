<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 16:01:46
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/constants.html" */ ?>
<?php /*%%SmartyHeaderCode:159784da5b053bcc8e7-81956614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245ea2da95877299c54cd4e3c922bbb0d35038a3' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/constants.html',
      1 => 1302034030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159784da5b053bcc8e7-81956614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_group">добавить групу</a> <a class="button" onclick="history.back()">&laquo; назад </a>
<?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?>
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
	
	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
	<div id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
	
		<?php if ($_smarty_tpl->getVariable('constants')->value){?>
		<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['groupId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('constants')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
 $_smarty_tpl->tpl_vars['groupId']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
			<form method="post">
			<a id="g<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
"></a>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['group']->value['items']){?>
				<table class="form-table">
					<?php  $_smarty_tpl->tpl_vars['constantItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['constantItem']->key => $_smarty_tpl->tpl_vars['constantItem']->value){
?>
					<tr>
						<td width="150"><label for="item_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['constantItem']->value['title'];?>
</b><br /><small class="grey">{$app->constants.<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
.<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['name'];?>
}</small></label></td>
						<td><input type="text" name="items[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['master_id'];?>
]" id="item_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value];?>
" /></td>
						<td width="1%"><a class="drop" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=dropConstant&constant_master_id=<?php echo $_smarty_tpl->tpl_vars['constantItem']->value['master_id'];?>
"></a></td>
					</tr>
					<?php }} ?>
				</table>
				<?php }?>
				<table class="form-table">	
					<tr>
						<td>
							<input type="hidden" name="pAction" value="update_group_constants" />
							<a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_constant&group_id=<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
" class="button">Добавить константу</a> 
							<button class="button" type="submit">сохранить</button>
						</td>
					</tr>
				</table>
			</fieldset>
			</form>
		<?php }} ?>
		<?php }?>
		
	</div>
	<?php }} ?>
</div>
<?php }else{ ?>
	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }?>