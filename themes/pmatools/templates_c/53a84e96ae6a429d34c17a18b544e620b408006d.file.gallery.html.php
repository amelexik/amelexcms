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

css/gallery.css" rel="stylesheet" type="text/css" />
 $_from = $_smarty_tpl->getVariable('photoalbums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photoalbum']->key => $_smarty_tpl->tpl_vars['photoalbum']->value){
?>
</h2></div><!-- .photoalbum_title -->
 $_from = $_smarty_tpl->tpl_vars['photoalbum']->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
"><div class="photo_image" style="background:#A6E1F9 url(<?php echo $_smarty_tpl->getVariable('app')->value->gallery_thumbs_path;?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
) no-repeat center center;"></div></a><!-- .photo_image -->
</div><!-- .photo_title -->