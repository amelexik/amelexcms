<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 17:29:38
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/gallery.html" */ ?>
<?php /*%%SmartyHeaderCode:13247573664f4ba162503703-74022749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a84e96ae6a429d34c17a18b544e620b408006d' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/gallery.html',
      1 => 1303988940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13247573664f4ba162503703-74022749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript"> 	$(document).ready(function() {		$("a[rel=grouped_elements]").fancybox({			overlayOpacity: 0.7,			'transitionIn'		: 'none', 			'transitionOut'		: 'none',			'titlePosition' 	: 'over',			'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {				return '<span id="fancybox-title-over">Изображение ' +  (currentIndex + 1) + ' из ' + currentArray.length + '</span>';			}		});	});</script><link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/gallery.css" rel="stylesheet" type="text/css" /><div id="gallery"><?php if ($_smarty_tpl->getVariable('photoalbums')->value){?>	<?php  $_smarty_tpl->tpl_vars['photoalbum'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('photoalbums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photoalbum']->key => $_smarty_tpl->tpl_vars['photoalbum']->value){
?>	<div class="photoalbum">		<div class="photoalbum_title"><h2><?php echo $_smarty_tpl->tpl_vars['photoalbum']->value['title'];?>
</h2></div><!-- .photoalbum_title -->		<div class="photoalbum_content">			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>			<?php $_smarty_tpl->tpl_vars['iteration'] = new Smarty_variable(1, null, null);?>			<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photoalbum']->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>			<div class="photo <?php if ($_smarty_tpl->getVariable('iteration')->value%3==1){?>first<?php }?> <?php if ($_smarty_tpl->getVariable('iteration')->value%3==0){?>last<?php }?>">				<a rel="grouped_elements" href="<?php echo $_smarty_tpl->getVariable('app')->value->gallery_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
"><div class="photo_image" style="background:#A6E1F9 url(<?php echo $_smarty_tpl->getVariable('app')->value->gallery_thumbs_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
) no-repeat center center;"></div></a><!-- .photo_image -->				<div class="photo_title"><?php echo $_smarty_tpl->getVariable('num')->value;?>
</div><!-- .photo_title -->			</div><!-- .photo -->			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>			<?php $_smarty_tpl->tpl_vars['iteration'] = new Smarty_variable($_smarty_tpl->getVariable('iteration')->value+1, null, null);?>			<?php }} ?>			<div class="clear"></div><!-- .clear -->		</div><!-- .photoalbum_content -->	</div><!-- .photoalbum -->	<?php }} ?><?php }?></div><!-- #gallery -->