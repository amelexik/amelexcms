<?php /* Smarty version Smarty-3.0.6, created on 2011-04-12 16:35:48
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_photoalbum.html" */ ?>
<?php /*%%SmartyHeaderCode:169814da45534256a62-64245322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0e0c045ea1a8b72c9b4deac1df0e411e80fe26' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_photoalbum.html',
      1 => 1302615348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169814da45534256a62-64245322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
	<p>Добавить <b>альбом</b> в фотогалерею</p>
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
		<div class="langtab_div" id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
			<table class="form-table">
				<tr>
					<td width="150"><label for="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Название альбома</b>:<br /><small>(язык: <?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
)</small></label></td>
					<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>
				</tr>
			</table>
		</div>
		<?php }} ?>
		
		<div class="langtab_div">
			<table class="form-table">
				<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>
				<tr>
					<td width="150"><label for="add_date"><b>Дата создания:</b></label></td>
					<td><input type="text" name="item[add_date]" id="add_date" value="<?php echo $_smarty_tpl->getVariable('item')->value['add_date'];?>
" /></td>
				</tr>
				<?php }?>
				<tr>
					<td width="150"><label for="display">Статус:</label></td>
					<td>
						<select name="item[display]" id="display">
							<option <?php if ($_smarty_tpl->getVariable('item')->value['display']=='y'){?>selected="selected"<?php }?> value="y">отображать</option>
							<option <?php if ($_smarty_tpl->getVariable('item')->value['display']=='n'){?>selected="selected"<?php }?> value="n">неотображать</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
		
		<input type="hidden" name="item[structure_master_id]" value="<?php echo $_GET['structure_master_id'];?>
" />
		
		<div class="langtab_div">
			<input type="hidden" name="pAction" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>update_photoalbum<?php }else{ ?>add_photoalbum<?php }?>" />
			<button class="button" type="submit"><?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>Обновить фотоальбом<?php }else{ ?>Добавить фотоальбом<?php }?></button>
		</div>
		
	</div>
</form>