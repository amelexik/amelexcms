<?php /* Smarty version Smarty-3.0.6, created on 2007-01-05 21:35:06
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/photo.html" */ ?>
<?php /*%%SmartyHeaderCode:15673459ea86a12be89-49039890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f76e62be7371bc242de55aeeeb4e90b17860fb' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/photo.html',
      1 => 1302614498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15673459ea86a12be89-49039890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\server\wwwroot\pmatools\libs\smarty\plugins\modifier.date_format.php';
?><p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_photoalbum&structure_master_id=<?php echo $_GET['structure_master_id'];?>
">добавить  фотоальбом</a><?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?><div id="langtabs">	<ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>			<li><a href="#lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>		<?php }} ?>	</ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>	<div id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">		<table class="table" width="100%">			<thead>				<tr>					<td width="1%">#</td>					<td>Название альбома</td>					<td width="1%">date</td>					<td colspan="3" width="1%">date</td>				</tr>			</thead>			<tbody>			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>			<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('photoalbums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
?>			<tr class="display-<?php echo $_smarty_tpl->tpl_vars['album']->value['display'];?>
">				<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>				<td><?php echo $_smarty_tpl->tpl_vars['album']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</td>				<td><small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value['add_date'],"%H:%M:%S");?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value['add_date'],"%d.%b.%Y");?>
</small></td>				<td><a href="<?php echo $_smarty_tpl->tpl_vars['album']->value['edit_photos_url'];?>
" class="edit"></a></td>				<td><a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_photoalbum&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="property"></a></td>				<td><a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=drop_album&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="drop"></a></td>			</tr>			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>			<?php }} ?>			</tbody>		</table>	</div>	<?php }} ?></div><?php }else{ ?>	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?><?php }?>