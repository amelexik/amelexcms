<?php /* Smarty version Smarty-3.0.6, created on 2011-04-20 09:45:30
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_static_content.html" */ ?>
<?php /*%%SmartyHeaderCode:185854da45b2752c930-54997713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8059b25708d1dce4d578e71f49b25898f7ff79aa' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_static_content.html',
      1 => 1302034028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185854da45b2752c930-54997713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post"><div id="langtabs">	<ul>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
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
?>	<div class="langtab_div" id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">		<textarea name="content[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
]" id="pageContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('content')->value[$_smarty_tpl->tpl_vars['lang_id']->value];?>
</textarea>	</div>	<?php }} ?></div>		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>	<script type="text/javascript">    var editor_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
 = CKEDITOR.replace( 'pageContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',    	{        filebrowserBrowseUrl: "/admin/js/ckfinder/ckfinder.html",        filebrowserImageBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Images",        filebrowserFlashBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Flash",        filebrowserUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files",        filebrowserImageUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images",        filebrowserFlashUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash",        filebrowserWindowWidth: "1000",        filebrowserWindowHeight: "700"    }	    );	</script>	<?php }} ?><div class="langtab_div">	<input type="hidden" name="pAction" value="set_static_content" />	<button name="submit_mode" value="set" class="button" type="submit">Применить</button> <button name="submit_mode" value="save" class="button" type="submit">Сохранить</button> <a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&parent_id=<?php echo $_GET['parent_id'];?>
">отмена</a></div></form>