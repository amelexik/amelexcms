<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 17:45:34
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/gallery.html" */ ?>
<?php /*%%SmartyHeaderCode:244284da54878516e85-03846315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7f9af06ea00ea0621c12f48987d9b11092a10d' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/gallery.html',
      1 => 1168026310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244284da54878516e85-03846315',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\server\root\pmatools\libs\smarty\plugins\modifier.date_format.php';
?><p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_album&structure_master_id=<?php echo $_GET['structure_master_id'];?>
">добавить  фотоальбом</a></p>
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
		<table class="table" width="100%">
			<thead>
				<tr>
					<td width="1%">#</td>
					<td>Название альбома</td>
					<td width="1%">date</td>
					<td colspan="3" width="1%">date</td>
				</tr>
			</thead>
			<tbody>
			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
			<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('albums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
?>
			<tr class="display-<?php echo $_smarty_tpl->tpl_vars['album']->value['display'];?>
">
				<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['album']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</td>
				<td><small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value['add_date'],"%H:%M:%S");?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value['add_date'],"%d.%b.%Y");?>
</small></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['album']->value['edit_photos_url'];?>
" class="edit"></a></td>
				<td><a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_album&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="property"></a></td>
				<td><a href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=drop_album&album_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
" class="drop"></a></td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
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