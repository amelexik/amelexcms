<?php /* Smarty version Smarty-3.0.6, created on 2012-02-28 13:00:44
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/banners.html" */ ?>
<?php /*%%SmartyHeaderCode:15700534174f4cb3dc711db1-37701629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef8193714220377cfadc615bf95de157411c223' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/banners.html',
      1 => 1330426800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15700534174f4cb3dc711db1-37701629',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banners')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
?>
</span></div><!-- .banner_title -->
</div>