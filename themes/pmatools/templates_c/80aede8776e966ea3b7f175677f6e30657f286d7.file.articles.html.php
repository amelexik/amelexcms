<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 17:29:45
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/articles.html" */ ?>
<?php /*%%SmartyHeaderCode:20052150764f4ba169966df9-77563530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80aede8776e966ea3b7f175677f6e30657f286d7' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/articles.html',
      1 => 1303988939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20052150764f4ba169966df9-77563530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/articles.css" rel="stylesheet" type="text/css" />
<div id="articles">
<?php if ($_smarty_tpl->getVariable('articles')->value){?>
	<?php  $_smarty_tpl->tpl_vars['articleItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['articleItem']->key => $_smarty_tpl->tpl_vars['articleItem']->value){
?>
	<div class="article">
		<div class="article-header"><h2><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['name'];?>
</h2></div><!-- .article-header -->
		<div class="article-content"><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['preview'];?>
</div><!-- .article-content -->
		<div class="article-footer">
			<div class="article-footer-right">
				<a href="<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['tekst_ssylok_chitat_dalee'];?>
 &raquo;</a>
			</div><!-- .article-footer-right -->
			<div class="article-footer-left">
				<span><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['add_date'];?>
</span>
			</div><!-- .article-footer-left -->
			<div class="article-footer-clear"></div><!-- .article-footer-clear -->
		</div><!-- .article-footer -->
	</div><!-- .article -->
	<?php }} ?>
	
	<?php if ($_smarty_tpl->getVariable('pageLister')->value){?><div class="pageLister"><?php echo $_smarty_tpl->getVariable('pageLister')->value;?>
</div><!-- #pageLister --><?php }?>
	
<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('article')->value){?>
	<div class="article">
		<div class="article-header"><h1><?php echo $_smarty_tpl->getVariable('article')->value['name'];?>
</h1></div><!-- .article-header -->
		<div class="article-content"><?php echo $_smarty_tpl->getVariable('article')->value['content'];?>
</div><!-- .article-content -->
		<div class="article-footer">
			<div class="article-footer-right">
				
			</div><!-- .article-footer-right -->
			
			<div class="article-footer-left">
				<a href="<?php echo $_smarty_tpl->getVariable('back_url')->value;?>
">&laquo; <?php echo $_smarty_tpl->getVariable('app')->value->constants['general']['tekst_ssylki_vernutsya_v_novosti'];?>
</a>
			</div><!-- .article-footer-left -->
			
			<div class="article-footer-clear"></div><!-- .article-footer-clear -->
		</div><!-- .article-footer -->
	</div><!-- .article -->	
	<?php }?>
<?php }?>
</div>