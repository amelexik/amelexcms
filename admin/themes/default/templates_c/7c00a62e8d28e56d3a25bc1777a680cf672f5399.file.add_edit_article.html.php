<?php /* Smarty version Smarty-3.0.6, created on 2011-04-16 00:26:47
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_article.html" */ ?>
<?php /*%%SmartyHeaderCode:121624da8b817458471-22711783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c00a62e8d28e56d3a25bc1777a680cf672f5399' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/mode/add_edit_article.html',
      1 => 1302034028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121624da8b817458471-22711783',
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
					<td><label for="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Транслитерация</b></label></td>
					<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][translit]" id="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['translit'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="display_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Статус:</label></td>
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
				<tr>
					<td><label for="preview_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Краткое содержимое:</b></label></td>
					<td><textarea name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][preview]" id="preview_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['preview'];?>
</textarea></td>
				</tr>
				<tr>
					<td><label for="content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><b>Полное содержимое:</b></label></td>
					<td><textarea name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][content]" id="content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['content'];?>
</textarea></td>
				</tr>
			</table>
		</div><!-- .langtab_div -->
		<script type="text/javascript">
		var editor_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
 = CKEDITOR.replace( 'preview_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',
		
		{
			filebrowserBrowseUrl: "/admin/js/ckfinder/ckfinder.html",
			filebrowserImageBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Images",
			filebrowserFlashBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Flash",
			filebrowserUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files",
			filebrowserImageUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images",
			filebrowserFlashUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash",
			filebrowserWindowWidth: "1000",
			filebrowserWindowHeight: "700"
		}
		
		);
		</script>
		<script type="text/javascript">
		var editor_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
 = CKEDITOR.replace( 'content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',
		
		{
			filebrowserBrowseUrl: "/admin/js/ckfinder/ckfinder.html",
			filebrowserImageBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Images",
			filebrowserFlashBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Flash",
			filebrowserUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files",
			filebrowserImageUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images",
			filebrowserFlashUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash",
			filebrowserWindowWidth: "1000",
			filebrowserWindowHeight: "700"
		}
		
		);
		</script>
		<?php }} ?>
	</div><!-- #langtabs -->
	<div class="langtab_div">
		<input type="hidden" name="pAction" value="<?php if ($_GET['article_master_id']>0){?>update_article_item<?php }else{ ?>add_article_item<?php }?>" />
		<button type="submit">Сохранить</button> <button onclick="history.back()">&laquo; назад </button>
	</div>
</form>