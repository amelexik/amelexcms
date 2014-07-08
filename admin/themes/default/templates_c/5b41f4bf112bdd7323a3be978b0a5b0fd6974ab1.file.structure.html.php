<?php /* Smarty version Smarty-3.0.6, created on 2011-05-11 12:51:58
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/structure.html" */ ?>
<?php /*%%SmartyHeaderCode:10072613494dca5c3ef2d758-45185631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b41f4bf112bdd7323a3be978b0a5b0fd6974ab1' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/sections/structure.html',
      1 => 1303988604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10072613494dca5c3ef2d758-45185631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/web154/domains/pma-tools.com.ua/public_html/libs/smarty/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?>
<p><a class="button" onclick="history.back()">&laquo; назад </a> <a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_structure_item&parent_id=<?php echo $_GET['parent_id'];?>
">добавить раздел</a></p>
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
		<table class="table structure sortable" width="100%">
			<thead>
				<tr>
					<td width="1%">#</td>
					<td>Название раздела</td>
					<td width="1%">add date</td>
					<td width="1%">шаблон</td>
					
					
					
					<td width="1%" colspan="3">Действие</td>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['structureItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('structure')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['structureItem']->key => $_smarty_tpl->tpl_vars['structureItem']->value){
?>
				<tr id="id_<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['id'];?>
" class="display-<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display'];?>
">
					<td><?php echo $_smarty_tpl->tpl_vars['structureItem']->value['sorting'];?>
</td>
					<td>
						<p><a href="?section=structure&parent_id=<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['structureItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['name'];?>
</a></p>
						<p><small>ссылка: <a class="grey" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['structureItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['url'];?>
</a></p>
					</td>
					<td align="center" valign="middle"><small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['structureItem']->value['add_date'],"%H:%M:%S");?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['structureItem']->value['add_date'],"%d.%b.%Y");?>
</small></td>
					<td width="1%"><?php echo $_smarty_tpl->getVariable('admin')->value->templates[$_smarty_tpl->tpl_vars['structureItem']->value['template']];?>
</td>
					
					<td><a title="Редактировать контент страницы" class="edit" href="<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['edit_url'];?>
"></a></td>
					<td><a title="Редактировать свойства раздела" class="property" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_structure_item&structure_item_id=<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['id'];?>
&parent_id=<?php echo $_GET['parent_id'];?>
"></a></td>
					<td><a title="Удалить раздел с внутренними подразделами?" class="drop" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=dropStructureItem&id=<?php echo $_smarty_tpl->tpl_vars['structureItem']->value['id'];?>
&parent_id=<?php echo $_smarty_tpl->getVariable('parent_id')->value;?>
"></a></td>
				</tr>
				<?php }} ?>
			</tbody>
		</table>
		</div>
	<?php }} ?>
</div>
<?php }else{ ?>
	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }?>
