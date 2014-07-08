<?php /* Smarty version Smarty-3.0.6, created on 2011-04-26 20:45:18
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:50184db704ae13b8a8-20481183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2315616dcabbfbc35dcd9bba5c22a71c1ad0d801' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/index.html',
      1 => 1303839914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50184db704ae13b8a8-20481183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\server\wwwroot\pmatools\libs\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	
	<title>Админ-Центр</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
	<meta name="Description" content="" /> 
	<meta name="Keywords" content="" /> 
	<meta name="language" content="" />  
	<link href="<?php echo $_smarty_tpl->getVariable('admin')->value->theme_path;?>
css/index.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="/js/jquery/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="/js/jquery/jquery.cookie.js"></script>
	
	<script type="text/javascript" src="/js/jquery/jqueryui/js/jquery-ui-1.8.9.custom.min.js"></script>
	<link href="/js/jquery/jqueryui/css/smoothness/jquery-ui-1.8.9.custom.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="/admin/js/ckeditor/ckeditor.js"></script>
	<script src="/admin/js/ckfinder/ckfinder.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/functions.js"></script>

</head> 
 
<body>


<div id="body">

	<div id="wrapper">

		<div id="head">
			<a id="logo" href="/admin/?section=structure"></a><!-- #logo -->
		</div><!-- #head -->

		<div id="adminMenu">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['adminMenuItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->adminMenu; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['adminMenuItem']->key => $_smarty_tpl->tpl_vars['adminMenuItem']->value){
?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['adminMenuItem']->value['section']!=''&&$_smarty_tpl->tpl_vars['adminMenuItem']->value['section']==$_GET['section']){?>class="current"<?php }?> <?php if ($_smarty_tpl->tpl_vars['adminMenuItem']->value['target']!=''){?>target="<?php echo $_smarty_tpl->tpl_vars['adminMenuItem']->value['target'];?>
"<?php }?> href="<?php if ($_smarty_tpl->tpl_vars['adminMenuItem']->value['gAction']){?>/admin/?gAction=<?php echo $_smarty_tpl->tpl_vars['adminMenuItem']->value['gAction'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['adminMenuItem']->value['section']!=''){?>?section=<?php echo $_smarty_tpl->tpl_vars['adminMenuItem']->value['section'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['adminMenuItem']->value['url']!=''){?><?php echo $_smarty_tpl->tpl_vars['adminMenuItem']->value['url'];?>
<?php }?><?php }?><?php }?>"><?php echo $_smarty_tpl->tpl_vars['adminMenuItem']->value['title'];?>
</a>
				</li>
				
			<?php }} ?>
		</ul>
		</div><!-- #adminMenu -->	
		
		<div id="content">
		
		<p><?php echo $_smarty_tpl->getVariable('admin')->value->breadCrumbs;?>
</p>
		
		<?php if ($_smarty_tpl->getVariable('lister')->value){?><div class="pagination"><?php echo $_smarty_tpl->getVariable('lister')->value;?>
</div><?php }?>
		
		<?php if ($_smarty_tpl->getVariable('admin')->value->adminMessage){?><div id="adminMessage" class="message_block "><?php echo $_smarty_tpl->getVariable('admin')->value->adminMessage;?>
</div><?php }?>
		<?php if ($_smarty_tpl->getVariable('admin')->value->adminErrorMessage){?><div id="adminMessage" class="message_block alert_block"><?php echo $_smarty_tpl->getVariable('admin')->value->adminErrorMessage;?>
</div><?php }?>

		<?php if ($_smarty_tpl->getVariable('gSection')->value!=''){?>
			<?php ob_start(); ?>sections/<?php echo $_smarty_tpl->getVariable('gSection')->value;?>
.html<?php  Smarty::$_smarty_vars['capture']['include_file_path']=ob_get_clean();?>
			<?php $_template = new Smarty_Internal_Template(Smarty::$_smarty_vars['capture']['include_file_path'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<?php }?>
		</div><!-- #content -->
		
		<div id="footer">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
</div><!-- #footer -->

	</div><!-- #wrapper -->
</div><!-- #body -->

</body>
</html>