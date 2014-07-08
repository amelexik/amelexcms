<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 15:42:02
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/page.html" */ ?>
<?php /*%%SmartyHeaderCode:8239875344da59a1ab4f443-85797336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd801f86a1b593616da072e4c303965ffc8b4a3' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/page.html',
      1 => 1302511819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8239875344da59a1ab4f443-85797336',
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