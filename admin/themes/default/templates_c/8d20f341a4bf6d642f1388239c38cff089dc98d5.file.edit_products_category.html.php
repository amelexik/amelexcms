<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:58:20
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_products_category.html" */ ?>
<?php /*%%SmartyHeaderCode:31877494ddb8f4c6a1ec2-75004035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d20f341a4bf6d642f1388239c38cff089dc98d5' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_products_category.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31877494ddb8f4c6a1ec2-75004035',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Редактирование категории продукции</h1>
<form method="post" enctype="multipart/form-data">
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
					<td width="150"><label for="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Название категории:</label></td>
					<td><input type="text" name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Транслитерация:</label></td>
					<td><input type="text" name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][translit]" id="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['translit'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Титл:</label></td>
					<td><input type="text" name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_title]" id="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_title'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Описание:</label></td>
					<td><input type="text" name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_description]" id="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_description'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Ключевые слова:</label></td>
					<td><input type="text" name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_keywords]" id="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_keywords'];?>
" /></td>
				</tr>
				<tr>
					<td><label for="static_content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Текстовый контент:</label></td>
					<td><textarea name="category[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][static_content]" id="static_content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('category')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['static_content'];?>
</textarea></td>
				</tr>				
			</table>
		</div>
		<?php }} ?>
		
		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
		<script type="text/javascript">
		var editor_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
 = CKEDITOR.replace( 'static_content_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
',
		
		{
			filebrowserBrowseUrl: "/admin/js/ckfinder/ckfinder.html",
			filebrowserImageBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Images",
			filebrowserFlashBrowseUrl: "/admin/js/ckfinder/ckfinder.html?type=Flash",
			filebrowserUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files",
			filebrowserImageUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images",
			filebrowserFlashUploadUrl: "/admin/js/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash",
			filebrowserWindowWidth: "1000",
			filebrowserWindowHeight: "300"
		}
		
		);
		</script>
		<?php }} ?>		
		
		<div class="langtab_div">
			<table class="form-table">
				<tr>
					<td width="150"><label for="display">Статус:</label></td>
					<td>
						<select name="category[display]" id="display">
							<option <?php if ($_smarty_tpl->getVariable('category')->value['display']=='y'){?>selected="selected"<?php }?> value="y">Отображать</option>
							<option <?php if ($_smarty_tpl->getVariable('category')->value['display']=='n'){?>selected="selected"<?php }?> value="n">Скрыть</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="display"><b>Картинка:</b></label></td>
					<td>
						<p><input type="file" name="category_image" /></p>
						<?php if ($_smarty_tpl->getVariable('category')->value['category_image']){?>
						<p>
							<table border="0">
								<tr>
									<td><img src="<?php echo @CATALOG_CATEGORIES_IMAGE_PATH;?>
<?php echo $_smarty_tpl->getVariable('category')->value['category_image'];?>
" style="width:auto; border:#666 1px solid;" /></td>
									<td><input type="checkbox" id="drop_image" name="category[drop_image]" value="<?php echo $_smarty_tpl->getVariable('category')->value['category_image'];?>
" /> <label for="drop_image">удалить картинку</label></td>
								</tr>
							</table>
						</p>
						<?php }?>
					</td>
				</tr>
			</table>
		</div>
		<div class="langtab_div">
			<input type="hidden" name="pAction" value="update_category" />
			<input type="hidden" name="category[item_id]" value="<?php echo $_smarty_tpl->getVariable('category')->value['item_id'];?>
" />
			<input type="hidden" name="category[item_pid]" value="<?php echo $_smarty_tpl->getVariable('category')->value['item_pid'];?>
" />
			<button name="submit_mode" value="set" type="submit">Применить</button>
			<button name="submit_mode" value="save" type="submit">Сохранить</button>
		</div>
	</div><!-- #langtabs -->
</form>