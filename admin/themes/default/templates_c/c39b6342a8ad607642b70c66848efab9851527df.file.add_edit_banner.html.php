<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 14:15:59
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_banner.html" */ ?>
<?php /*%%SmartyHeaderCode:19167660024ddb936f89d7a0-99062025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c39b6342a8ad607642b70c66848efab9851527df' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/add_edit_banner.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19167660024ddb936f89d7a0-99062025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Создание/редактирование баннера</h1>
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
			<table class="form-table">
				<tr>
					<td width="150"><label for="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Заглавие баннера:</label></td>
					<td><input type="text" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
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
							<option <?php if ($_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['display']=='everywhere'){?>selected="selected"<?php }?> value="everywhere">Отображать на всех страницах</option>
						</select>				
					</td>
				</tr>
				
				
				<tr>
					<td><label for="bannerContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Содержимое(контент):</label></td>
					<td><textarea name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][content]" id="bannerContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->getVariable('item')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['content'];?>
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
 = CKEDITOR.replace( 'bannerContent_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
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
		
		<div class="langtab_div">
			<table class="form-table">
					<tr>
						<td width="150">
							<input type="hidden" name="pAction" value="<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?>update_banner<?php }else{ ?>add_banner<?php }?>" />
							<input type="hidden" name="banner_master_id" value="<?php echo $_smarty_tpl->getVariable('item')->value['id'];?>
" />
						</td>
						<td>
							<?php if ($_smarty_tpl->getVariable('item')->value['id']>0){?><button name="submit_mode" value="set" class="button" type="submit">Применить</button><?php }?><button name="submit_mode" value="save" class="button" type="submit">Сохранить</button>				
						</td>
					</tr>
			</table>
		</div>
	</div>
</form>