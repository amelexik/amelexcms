<?php /* Smarty version Smarty-3.0.6, created on 2011-04-22 12:40:14
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/banners.html" */ ?>
<?php /*%%SmartyHeaderCode:323974db14cfe40e8a2-03244006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f44f5f484f194f765d220052de5c02636e166f0b' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/banners.html',
      1 => 1303465214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323974db14cfe40e8a2-03244006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&mode=add_edit_banner">создать баннер</a></p><?php if ($_smarty_tpl->getVariable('admin')->value->mode==''){?><div id="langtabs">	<ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
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
">		<table class="table banners" width="100%">			<thead>				<tr>					<td width="1%">#</td>					<td>Заглавие баннера</td>					<td width="1%" colspan="2"></td>				</tr>			</thead>			<tbody>			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banners')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
?>				<tr id="id_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" class="display-<?php echo $_smarty_tpl->tpl_vars['banner']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display'];?>
">					<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
</td>					<td><a class="edit" href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['edit_url'];?>
"></a></td>					<td><a class="drop" href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['drop_url'];?>
"></a></td>				</tr>			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>			<?php }} ?>			</tbody>		</table>	</div>	<?php }} ?></div><?php }else{ ?>	<?php ob_start(); ?>mode/<?php echo $_smarty_tpl->getVariable('admin')->value->mode;?>
.html<?php  Smarty::$_smarty_vars['capture']['mode_file']=ob_get_clean();?>	<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['mode_file'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?><?php }?>