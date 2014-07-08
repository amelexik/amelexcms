<?php /* Smarty version Smarty-3.0.6, created on 2011-04-28 12:10:25
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/articles.html" */ ?>
<?php /*%%SmartyHeaderCode:141994db92f01cdfdf9-47117519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e04c4b3a13d5ea3fe7c45bfbb0f2a6c267d291' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/articles.html',
      1 => 1302034030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141994db92f01cdfdf9-47117519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\server\root\pmatools\libs\smarty\plugins\modifier.date_format.php';
?><?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?>
<p><a class="button" onclick="history.back()">&laquo; назад </a> <a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_article&structure_master_id=<?php echo $_GET['structure_master_id'];?>
">добавить статью</a></p>
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
	<table class="table" width="100%">
		<thead>
			<tr>
				<td>Название</td>
				<td width="1%">add date</td>
				<td width="1%" colspan="2">Действие</td>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['articleItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['articleItem']->key => $_smarty_tpl->tpl_vars['articleItem']->value){
?>
		<tr class="display-<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display'];?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['name'];?>
</td>
			<td><small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articleItem']->value['add_date'],"%H:%M:%S");?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articleItem']->value['add_date'],"%d.%b.%Y");?>
</small></td>
			<td><a title="Редактировать" class="edit" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_article&article_master_id=<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['id'];?>
&structure_master_id=<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['structure_master_id'];?>
"></td>
			<td><a title="Удалить" class="drop" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=dropArticleItem&article_master_id=<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['id'];?>
&structure_master_id=<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['structure_master_id'];?>
"></td>
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