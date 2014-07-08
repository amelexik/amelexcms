<?php /* Smarty version Smarty-3.0.6, created on 2011-04-12 17:59:38
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_photos.html" */ ?>
<?php /*%%SmartyHeaderCode:144044da468da39a166-54118693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '942c8fbdce323c0e607426709229263dfd9d6db1' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_photos.html',
      1 => 1302620378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144044da468da39a166-54118693',
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

<p class="container">
	<h2>Выберите фото для загрузки</h2>
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
				<a href="#" id="demo-browse">Выбрать файлы</a> |
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
</p>

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
						<td width="1%">1</td>
						<td>Название фотки</td>
						<td width="1%"></td>
					</tr>
				</thead>
				<tbody>
				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
				<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('photos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>
				<tr>
					<td><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
					<td>
						<div style="width:100px; height:100px; overflow:hidden; border:#666 1px solid;">
							<a href="<?php echo $_smarty_tpl->getVariable('admin')->value->gallery_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" target="_blank">
								<img style="width:100px" src="<?php echo $_smarty_tpl->getVariable('admin')->value->gallery_thumbs_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" />
							</a>
						</div>
					</td>
					<td><textarea></textarea></td>
					<td><a class="drop"></a></td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	<?php }} ?>
</div>