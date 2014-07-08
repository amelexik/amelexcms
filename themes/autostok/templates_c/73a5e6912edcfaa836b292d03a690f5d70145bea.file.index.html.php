<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 14:39:59
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1831651344da58b8f11b356-68957618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a5e6912edcfaa836b292d03a690f5d70145bea' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/index.html',
      1 => 1302511819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831651344da58b8f11b356-68957618',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	
	<title><?php echo $_smarty_tpl->getVariable('app')->value->meta['title'];?>
</title>
	<meta name="description" content="<?php echo $_smarty_tpl->getVariable('app')->value->meta['description'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('app')->value->meta['keywords'];?>
" />
	<meta name="language" content="<?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('app')->value->current_lang['prefix'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('app')->value->current_lang['prefix'],SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('app')->value->current_lang['prefix']));?>
" />
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="20 days" />
	<meta name="distribution" content="global" />	
	
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/registration.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/articles.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/jquery-1.5.1.js" language="javascript"></script>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/nivo-slider/jquery.nivo.slider.pack.js"></script>

	<script type="text/javascript" src="/js/jquery/jqueryui/js/jquery-ui-1.8.9.custom.min.js"></script>
	<link href="/js/jquery/jqueryui/css/smoothness/jquery-ui-1.8.9.custom.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="/js/jquery/jquery.cookie.js"></script>
	<script type="text/javascript" src="/js/jquery/jquery.timers-1.2.js"></script>

	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/func.js" language="javascript"></script>
	
	
	<?php if (!$_GET['code']){?>
	<script type="text/javascript">
	$(document).ready(function(){

		// quick_search
		$("#quick_search_query").focus(function(){
			$(this).attr("value","");
		});
	
		$("#quick_search_query").blur(function(){
			var def_string = 'поиск по коду запчасти';
			var cur_string = $(this).attr("value");
			if (cur_string == ''){
				$(this).attr("value",def_string);
			}
		});	
	});
	</script>
	<?php }?>
</head>

<body>

<div id="shadow-out">
<div id="wrapper">
	
	<div id="head">
		<table id="head-table" border="0">
			<tr>
				
				<td width="190"><a id="logo" href="/">Autostok</a><!-- # logo --></td>
				<td width="500">
					<div id="slogan"><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['slogan'];?>
</div>
				</td>
				<td width="300" style="padding:0 10px 0 0">
					<div id="phone"><span>(0432) </span>55-99-66</div>
					<div id="icons">
						<a href="/"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
/img/ico_home.gif" /></a>
						<a href="<?php echo $_smarty_tpl->getVariable('app')->value->siteMapUrl;?>
"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
/img/ico_map.gif" /></a>
						<a href="/kontakty/"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
/img/ico_mail.gif" /></a>
					</div>
				</td>
			
			</tr>
			<tr>
				
				<td>
					<div id="quickSearch">
						<form id="quickSearchForm" method="get" action="/searchbycode/">	
							<input type="text" name="code" id="quick_search_query" value="<?php if ($_GET['code']){?><?php echo $_GET['code'];?>
<?php }else{ ?>поиск по коду запчасти<?php }?>" /><button type="submit" id="search_submit"></button>
						</form>
					</div>
				</td>
				<td valign="top"><div id="goVinCodeSearch"><a href="/produkciya/acura/acura-cl/">поиск по vin-коду</a></div></td>
				<td></td>
			
			</tr>
			<tr>
				<td><div id="searchExample">например: <a id="codeExample">2330021010</a></div></td>
				<td colspan="2">
				
				<div id="mainNav">
					<?php if ($_smarty_tpl->getVariable('treeMenu')->value){?>
					<table class="mainNav">
						<tr>
						<?php  $_smarty_tpl->tpl_vars['treeMenuItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['treeMenuItemKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('treeMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['treeMenuItem']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['treeMenuItem']->iteration=0;
if ($_smarty_tpl->tpl_vars['treeMenuItem']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['treeMenuItem']->key => $_smarty_tpl->tpl_vars['treeMenuItem']->value){
 $_smarty_tpl->tpl_vars['treeMenuItemKey']->value = $_smarty_tpl->tpl_vars['treeMenuItem']->key;
 $_smarty_tpl->tpl_vars['treeMenuItem']->iteration++;
 $_smarty_tpl->tpl_vars['treeMenuItem']->last = $_smarty_tpl->tpl_vars['treeMenuItem']->iteration === $_smarty_tpl->tpl_vars['treeMenuItem']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['treeMenuForeach']['last'] = $_smarty_tpl->tpl_vars['treeMenuItem']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['treeMenuItem']->value['pid']==0){?>
						<td>
							<div class="relative">
								<a id="item_<?php echo $_smarty_tpl->tpl_vars['treeMenuItem']->value['id'];?>
" class="mainNavLink <?php if ($_smarty_tpl->tpl_vars['treeMenuItem']->value['id']==$_smarty_tpl->getVariable('app')->value->branchKeys[0]){?>current<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['treeMenuForeach']['last']){?>last<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['treeMenuItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['treeMenuItem']->value['name'];?>
</a>
								<?php if ($_smarty_tpl->tpl_vars['treeMenuItem']->value['sub']){?>
								<div class="dropDown level_1" id="item_<?php echo $_smarty_tpl->tpl_vars['treeMenuItem']->value['id'];?>
_level_1" style="display:none;">
									<?php  $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treeMenuItem']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->key => $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value){
?>
									<div class="item lev1" id="item_lev1_<?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['id'];?>
">
										<a href="<?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['name'];?>
</a>
										<?php if ($_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['sub']){?>
										<div class="level_2_container">
											<div class="dropDown level_2" id="item_lev1_<?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['id'];?>
_sub" style="display:none">
												<?php  $_smarty_tpl->tpl_vars['treeMenuSubItem_lev2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treeMenuSubItem_lev1']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['treeMenuSubItem_lev2']->key => $_smarty_tpl->tpl_vars['treeMenuSubItem_lev2']->value){
?>
												<div class="item lev2"><a href="<?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev2']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['treeMenuSubItem_lev2']->value['name'];?>
</a></div><!-- .item -->
												<?php }} ?>
											</div><!-- .dropDown .level_2 -->
										</div><!-- .level_2_container -->
										<?php }?>
									</div><!-- .item -->
									<?php }} ?>
								</div><!-- .dropDown level_1 -->
								<?php }?>
							</div>
						</td>
						<?php }?>
						<?php }} ?>
						</tr>
					</table>
					<?php }?>	
					
				</div><!-- #mainNav -->				
				
				</td>
			</tr>
		</table>
	</div><!-- #head -->
	
	<div id="content">	
		
		<div id="userPanel">
			<?php $_template = new Smarty_Internal_Template("user_login_block.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			<?php $_template = new Smarty_Internal_Template("cart_informer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		</div><!-- #userPanel -->
		
		
		
		<?php if ($_smarty_tpl->getVariable('app')->value->siteStart){?>
		<div id="slider" style="height:257px;overflow:hidden">
			<img src="/upload/images/nivo-slider/1.jpg" width="1003" border="0" />
			<img src="/upload/images/nivo-slider/2.jpg" width="1003" border="0" />
			<img src="/upload/images/nivo-slider/3.jpg" width="1003" border="0" />
		</div>
		<?php }?>
		
		
		<div><?php $_template = new Smarty_Internal_Template('breadcrumbs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>
		
		<div id="mainContent">
			
			<div class="content">
			
					<div>
						<?php if ($_smarty_tpl->getVariable('app')->value->error404==1){?>
							<?php $_template = new Smarty_Internal_Template('404.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
						<?php }else{ ?>
							<?php if ($_smarty_tpl->getVariable('app')->value->module['name']){?>
								<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('app')->value->module['html_template'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
							<?php }else{ ?>
								<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('app')->value->currentPage['html_template'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
							<?php }?>
						<?php }?>
					</div>
				
				<?php if ($_smarty_tpl->getVariable('app')->value->currentPage['template']=="page"){?>
				<?php }?>
			
			</div><!-- .content -->
		</div><!-- #mainContent -->
	
	</div><!-- #content -->
	
	<div id="footer">
		
		<div id="footerNav">
		<?php  $_smarty_tpl->tpl_vars['mainMenuItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mainMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mainMenuItem']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['mainMenuItem']->iteration=0;
if ($_smarty_tpl->tpl_vars['mainMenuItem']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mainMenuItem']->key => $_smarty_tpl->tpl_vars['mainMenuItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mainMenuItem']->key;
 $_smarty_tpl->tpl_vars['mainMenuItem']->iteration++;
 $_smarty_tpl->tpl_vars['mainMenuItem']->last = $_smarty_tpl->tpl_vars['mainMenuItem']->iteration === $_smarty_tpl->tpl_vars['mainMenuItem']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footerNavigation']['last'] = $_smarty_tpl->tpl_vars['mainMenuItem']->last;
?>
			<a <?php if ($_smarty_tpl->getVariable('app')->value->branchKeys){?><?php if ($_smarty_tpl->tpl_vars['mainMenuItem']->value['id']==$_smarty_tpl->getVariable('app')->value->branchKeys[0]){?>class="current"<?php }?><?php }?> title="<?php echo $_smarty_tpl->tpl_vars['mainMenuItem']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['mainMenuItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainMenuItem']->value['name'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footerNavigation']['last']){?> | <?php }?>
		<?php }} ?>
		</div><!-- #footerNav -->
		
		<div id="copy">
			<script type="text/javascript" src="/orphus/orphus.js"></script>
			<a rel="nofollow" href="http://orphus.ru" id="orphus" target="_blank"><img align="middle" alt="Система Orphus" src="/orphus/orphus.gif" border="0" /></a>
			<?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['copyright'];?>

			 <a href="http://www.metastudio.com.ua/ru/uslugi/sozdanie_i_reklama_veb-sajtov/razrabotka_veb-sajtov/" target="_blank">Разработка сайта Метастудия</a>
		</div>
		
	</div><!-- .footer -->

</div><!-- #wrapper -->
</div><!-- #shadow-out -->


</body>

</html>
