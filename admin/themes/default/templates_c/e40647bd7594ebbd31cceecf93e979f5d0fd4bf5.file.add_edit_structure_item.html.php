<?php /* Smarty version Smarty-3.0.6, created on 2011-04-26 19:43:13
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_structure_item.html" */ ?>
<?php /*%%SmartyHeaderCode:151964db6f621b68514-59400009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40647bd7594ebbd31cceecf93e979f5d0fd4bf5' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_structure_item.html',
      1 => 1303806956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151964db6f621b68514-59400009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
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
		<p>язык: <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</b></p>
		<table class="form-table">
			<tr>
				<td width="150"><label for="name_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Название</b></label></td>
				<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][name]" id="name_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['name'];?>
" /></td>
			</tr>
			<tr>
				<td><label for="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Титл</label></td>
				<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>
			</tr>
			<tr>
				<td><label for="description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Описание</label></td>
				<td>
					<textarea name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][description]" id="description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['description'];?>
</textarea>
				</td>
			</tr>
			<tr>
				<td><label for="keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Ключевые слова</label></td>
				<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][keywords]" id="keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['keywords'];?>
" /></td>
			</tr>
			<tr>
				<td width="150"><label for="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Транслитерация</b></label></td>
				<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][translit]" id="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['translit'];?>
" /></td>
			</tr>
			<tr>
				<td><label for="display_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Статус раздела:</label></td>
				<td>
					<select name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][display]" id="display_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
						<option <?php if ($_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display']=='y'){?>selected="selected"<?php }?> value="y">отображать</option>
						<option <?php if ($_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display']=='n'){?>selected="selected"<?php }?> value="n">неотображать</option>
						<option <?php if ($_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display']=='h'){?>selected="selected"<?php }?> value="h">скрыть в меню</option>
					</select>
				</td>
			</tr>
			<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>
			<tr>
				<td><label for="banners_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Баннера:</label></td>
				<td>
					<?php if ($_smarty_tpl->getVariable('banners')->value){?>
					<ul class="banners_list">
						<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banners')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
?>
							<li><input id="banner_checkbox_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" type="checkbox" name="banners[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][]" <?php if ($_smarty_tpl->tpl_vars['banner']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display']=="everywhere"){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['checked']=="checked"){?>checked="checked"<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" /> <label for="banner_checkbox_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</label></li>
						<?php }} ?>
					</ul>
					<?php }?>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	<?php }} ?>
	<div class="langtab_div">
		<table class="form-table">
			<tr>
				<td width="150"><label for="template"><b>шаблон</b></label></td>
				<td>
					<select name="item[template]" id="template">
						<?php  $_smarty_tpl->tpl_vars['template_title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['template_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->templates; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['template_title']->key => $_smarty_tpl->tpl_vars['template_title']->value){
 $_smarty_tpl->tpl_vars['template_name']->value = $_smarty_tpl->tpl_vars['template_title']->key;
?>
						<option <?php if ($_smarty_tpl->getVariable('item')->value['template']==$_smarty_tpl->tpl_vars['template_name']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['template_title']->value;?>
</option>
						<?php }} ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="template">сортировка</label></td>
				<td><input type="text" name="sorting" id="sorting" value="<?php echo $_smarty_tpl->getVariable('item')->value['sorting'];?>
" /></td>
			</tr>
		</table>
	</div>
	<div class="langtab_div">
		<input type="hidden" name="parent_id" value="<?php echo $_GET['parent_id'];?>
" />
		<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><input type="hidden" name="pAction" value="update_structure_item" /><?php }else{ ?><input type="hidden" name="pAction" value="add_structure_item" /><?php }?>
		<button class="button" type="submit"><?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>Отправить<?php }else{ ?>Добавить раздел<?php }?></button>
	</div>
</div>
</form>