<?php /* Smarty version Smarty-3.0.6, created on 2012-03-05 13:21:58
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/page.html" */ ?>
<?php /*%%SmartyHeaderCode:8924775474f54a1d6008615-36285718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed41dde8a894c44eb9ee39fa64d926a2c1fbca8' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/page.html',
      1 => 1330946512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8924775474f54a1d6008615-36285718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('app')->value->branchKeys[0]==1){?>
	<?php if ($_smarty_tpl->getVariable('app')->value->branchKeysCount==2){?>
		<?php $_template = new Smarty_Internal_Template("car_models.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('app')->value->branchKeys[2]>0){?>
		<?php $_template = new Smarty_Internal_Template("form_for_online_chat.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<?php }?>
<?php }?>
<div class="page">
<?php echo $_smarty_tpl->getVariable('content')->value;?>

</div>