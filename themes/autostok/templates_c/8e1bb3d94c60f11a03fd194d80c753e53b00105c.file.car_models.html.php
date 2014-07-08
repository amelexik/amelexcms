<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 23:14:26
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/car_models.html" */ ?>
<?php /*%%SmartyHeaderCode:17298638124da60422bb6979-65182580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e1bb3d94c60f11a03fd194d80c753e53b00105c' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/car_models.html',
      1 => 1302511820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17298638124da60422bb6979-65182580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('models')->value){?>
<div id="fullMenu">
	<ul class="fullMenuItem">
	<?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('models')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['model']->key;
?>
		<li>модель: <a href="<?php echo $_smarty_tpl->tpl_vars['model']->value['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
</b></a></li>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('ItemsQantityInBlock')->value){?></ul><ul class="fullMenuItem"><?php }?>
	<?php }} ?>
	</ul>
	<div class="clear"></div>
</div><!-- #fullMenu -->
<?php }?>