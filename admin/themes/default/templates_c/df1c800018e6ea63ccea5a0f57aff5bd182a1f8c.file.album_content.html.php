<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 17:45:38
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/album_content.html" */ ?>
<?php /*%%SmartyHeaderCode:127464da54893688898-85401392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df1c800018e6ea63ccea5a0f57aff5bd182a1f8c' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/album_content.html',
      1 => 1168033444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127464da54893688898-85401392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Framework CSS -->
<link rel="stylesheet" href="/js/fancyupload/fancyupload.css" type="text/css" media="all">

<script type="text/javascript" src="/js/mootools.js"></script>
<script type="text/javascript" src="/js/fancyupload/source/Swiff.Uploader.js"></script>
<script type="text/javascript" src="/js/fancyupload/source/Fx.ProgressBar.js"></script>
<script type="text/javascript" src="/js/fancyupload/source/FancyUpload2.js"></script>

<script src="/js/fancyupload/script.js" type="text/javascript"></script>

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
				<li><a href="#upload-form"><b>+ Загрузить фото</b></a></li>
		</ul>
		
		<form name="photos" method="post">
		<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
			<div id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
				<table class="table gallery_photos" width="100%">
					<thead>
						<tr>
							<td width="1%">#</td>
							<td width="1%">1</td>
							<td>Описание</td>
							<td width="1%"></td>
						</tr>
					</thead>
					<tbody>
					<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
					<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['photo_master_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('photos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
 $_smarty_tpl->tpl_vars['photo_master_id']->value = $_smarty_tpl->tpl_vars['photo']->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
						<td><a class="thumb" target="_blank" href="<?php echo $_smarty_tpl->getVariable('admin')->value->gallery_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('admin')->value->gallery_thumbs_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
) no-repeat center center"></a></td>
						<td><textarea class="description" name="item[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['photo_master_id']->value;?>
][description]"><?php echo $_smarty_tpl->tpl_vars['photo']->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['description'];?>
</textarea></td>
						<td><a class="drop" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=drop_photo&photo_master_id=<?php echo $_smarty_tpl->tpl_vars['photo_master_id']->value;?>
&album_id=<?php echo $_GET['album_id'];?>
&structure_master_id=<?php echo $_GET['structure_master_id'];?>
"></a></td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
					<?php }} ?>
					</tbody>
				</table>
			</div>
		<?php }} ?>
		<input type="hidden" name="pAction" value="update_album_photos" />
		</form>
			<div id="upload-form">
					<h1>Выберите фото для загрузки</h1>
					<div>
					
						<form action="/js/fancyupload/server/script.php?album_id=<?php echo $_GET['album_id'];?>
" method="post" enctype="multipart/form-data" id="form-demo" album_id="<?php echo $_GET['album_id'];?>
">
							
							<fieldset id="demo-fallback">
								<legend>File Upload</legend>
								<p>
								This form is just an example fallback for the unobtrusive behaviour of FancyUpload.
								If this part is not changed, something must be wrong with your code.
								</p>
								<label for="demo-photoupload">
								Upload a Photo:
								<input type="file" name="Filedata" />
								</label>
							</fieldset>
							
							<div id="demo-status" class="hide">
								<p>
								<a href="#" id="demo-browse" style="color:red">Выбрать файлы</a> |
								<a href="#" id="demo-clear">Очистить список</a> |
								<a href="#" id="demo-upload">Начать загрузку</a>
								</p>
								<div>
								<strong class="overall-title"></strong><br />
								<img src="/js/fancyupload/assets/progress-bar/bar.gif" class="progress overall-progress" />
								</div>
								<div>
								<strong class="current-title"></strong><br />
								<img src="/js/fancyupload/assets/progress-bar/bar.gif" class="progress current-progress" />
								</div>
								<div class="current-text"></div>
							</div>
							
							<ul id="demo-list"></ul>
						</form>	
					
					</div>
			</div><!-- #upload-form -->
	</div>
<div class="langtab_div">
	<button type="button" onclick="document.forms.photos.submit()">сохранить изменения</button>
</div>