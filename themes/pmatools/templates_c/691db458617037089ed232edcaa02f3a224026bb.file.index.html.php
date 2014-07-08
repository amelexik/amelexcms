<?php /* Smarty version Smarty-3.0.6, created on 2012-03-17 13:28:43
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10344001334f64756bc19847-02372992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691db458617037089ed232edcaa02f3a224026bb' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/index.html',
      1 => 1331983718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10344001334f64756bc19847-02372992',
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
css/template.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/classes.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/jquery-1.5.1.js" language="javascript"></script>

	
	<script type="text/javascript" src="/js/jquery/jqueryui/js/jquery-ui-1.8.9.custom.min.js"></script>
	<!-- link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/jqueryui/start/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css" / -->
	<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/jqueryui/cupertino/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css" />
	<!-- link href="/js/jquery/jqueryui/css/smoothness/jquery-ui-1.8.9.custom.css" rel="stylesheet" type="text/css" / -->

	<script type="text/javascript" src="/js/jquery/jquery.cookie.js"></script>
	<script type="text/javascript" src="/js/jquery/jquery.timers-1.2.js"></script>

	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
js/func.js" language="javascript"></script>

</head>

<body style="background:#ccdcec">

<div id="wrapper">
	
	<div id="head">
		
		<div id="menu_and_icons">
			
			<div class="white">
				
				<div id="menu">
					<table class="horizontal-menu">
						<tr>
							<td><a id="catalogButton" href="/">Каталог</a></td>
							<?php  $_smarty_tpl->tpl_vars['mainNavItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mainNav')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mainNavItem']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['mainNavItem']->iteration=0;
if ($_smarty_tpl->tpl_vars['mainNavItem']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mainNavItem']->key => $_smarty_tpl->tpl_vars['mainNavItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mainNavItem']->key;
 $_smarty_tpl->tpl_vars['mainNavItem']->iteration++;
 $_smarty_tpl->tpl_vars['mainNavItem']->last = $_smarty_tpl->tpl_vars['mainNavItem']->iteration === $_smarty_tpl->tpl_vars['mainNavItem']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mainNavForeach']['last'] = $_smarty_tpl->tpl_vars['mainNavItem']->last;
?>
							<td><a class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mainNavForeach']['last']){?>last <?php }?><?php if ($_smarty_tpl->tpl_vars['mainNavItem']->value['id']==$_smarty_tpl->getVariable('app')->value->branchKeys[0]){?>current<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['mainNavItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainNavItem']->value['name'];?>
</a></td>
							<?php }} ?>
						</tr>
					</table>
				</div><!-- #menu -->
				
				<div id="icons">
					<a href="/"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
img/ico_home.gif" width="28" height="28" border="0" /></a>
					<a href="/sitemap/"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
img/ico_map.gif" width="28" height="28" border="0" /></a>
					<a href="/feedback/"><img src="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
img/ico_mail.gif" width="28" height="28" border="0" /></a>
				</div><!-- #menu_and_icons -->
				
				<div class="clear"></div><!--.clear-->
			</div><!-- .white -->
		
		</div><!-- #icons -->
		
		<div id="slogan_and_phone">
		
			<div id="slogan">
				<span class="slogan_header"><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['slogan'];?>
</span>
				<span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['slogan_strochka_2'];?>
</span>
				<span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['slogan_strochka_3'];?>
</span>
				<span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['slogan_strochka_4'];?>
</span>
			</div><!-- #slogan -->
			
			<div id="phone">
				<?php if ($_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_1']!=''){?><span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_1'];?>
</span><?php }?>
				<?php if ($_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_2']!=''){?><span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_2'];?>
</span><?php }?>
				<?php if ($_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_3']!=''){?><span><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['phone_num_3'];?>
</span><?php }?>
			</div><!-- #phone -->
		
		</div><!-- #slogan_and_phone -->
		
		<a href="/" id="logo"></a>
		<div id="domain"><?php echo $_SERVER['SERVER_NAME'];?>
</div>
		
		<?php $_template = new Smarty_Internal_Template("login_block.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<?php $_template = new Smarty_Internal_Template("cart_informer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
	</div><!-- #head -->
	
	<div id="content">
	
		<div id="mainContent">
		
			
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
		
		</div><!-- #mainContent -->
		
		<div id="sideContent">
		
			<?php if ($_smarty_tpl->getVariable('sideNav')->value){?>
			<div class="block">
				<div class="side_nav">
					<div class="side_nav_title"><a href="/">каталог  продукции</a></div>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['sideNavItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sideNav')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sideNavItem']->key => $_smarty_tpl->tpl_vars['sideNavItem']->value){
?>
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['sideNavItem']->value['current']==1){?>current<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['sideNavItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sideNavItem']->value['title'];?>
</a></li>
						<?php }} ?>
					</ul>
				</div><!-- .side_nav -->
			</div><!-- .block -->
			<?php }?>
			
			<?php $_template = new Smarty_Internal_Template("banners.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		</div><!-- #sideContent -->
		
		<div class="clear"></div>
	
	</div><!-- #content -->
	
	<div id="footer">
	
		<div id="footer_nav">
			<div class="white">
				<table class="horizontal-menu">
					<tr>
						<td><a id="catalogButton" href="/">Каталог</a></td>
					<?php  $_smarty_tpl->tpl_vars['mainNavItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mainNav')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mainNavItem']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['mainNavItem']->iteration=0;
if ($_smarty_tpl->tpl_vars['mainNavItem']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mainNavItem']->key => $_smarty_tpl->tpl_vars['mainNavItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mainNavItem']->key;
 $_smarty_tpl->tpl_vars['mainNavItem']->iteration++;
 $_smarty_tpl->tpl_vars['mainNavItem']->last = $_smarty_tpl->tpl_vars['mainNavItem']->iteration === $_smarty_tpl->tpl_vars['mainNavItem']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mainNavForeach']['last'] = $_smarty_tpl->tpl_vars['mainNavItem']->last;
?>
						<td><a class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mainNavForeach']['last']){?>last <?php }?><?php if ($_smarty_tpl->tpl_vars['mainNavItem']->value['id']==$_smarty_tpl->getVariable('app')->value->branchKeys[0]){?>current<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['mainNavItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainNavItem']->value['name'];?>
</a></td>
					<?php }} ?>
					</tr>
				</table>
			</div><!-- .white -->
		</div><!-- #footer_nav -->
		
		<div id="copyright">
			<div id="copy" align="center">&copy; 2011. PMA TOOLS. Все  права  защищены.<br /><a href="http://www.metastudio.com.ua/ru/uslugi/sozdanie_i_reklama_veb-sajtov/razrabotka_veb-sajtov/" target="_blank">Разработка сайта Метастудия</a></div><!-- #copy -->
		</div><!-- #copyright -->
		
		<div class="clear"></div><!-- .clear -->
	
	</div><!-- #footer -->
	

</div><!-- #wrapper -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30111698-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter13165801 = new Ya.Metrika({id:13165801, enableAll: true, 

webvisor:true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" 

defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/13165801" style="position:absolute; 

left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
