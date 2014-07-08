<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 23:14:17
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/articles.html" */ ?>
<?php /*%%SmartyHeaderCode:13330129164da60419d26891-60212706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b93b876f22ade8527f91eea12b8b3260e874826' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/articles.html',
      1 => 1302511820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13330129164da60419d26891-60212706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="articles">
<?php if ($_smarty_tpl->getVariable('articles')->value){?>
	<?php  $_smarty_tpl->tpl_vars['articleItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['articleItem']->key => $_smarty_tpl->tpl_vars['articleItem']->value){
?>
	<div class="article">
		<div class="article-header"><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['name'];?>
</div><!-- .article-header -->
		<div class="article-content"><?php echo $_smarty_tpl->tpl_vars['articleItem']->value['preview'];?>
</div><!-- .article-content -->
		<div class="article-footer">
			<div class="article-footer-right">
				<a href="<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('app')->value->constants['articles']['label_read_more'];?>
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
		<div class="article-header"><?php echo $_smarty_tpl->getVariable('article')->value['name'];?>
</div><!-- .article-header -->
		<div class="article-content"><?php echo $_smarty_tpl->getVariable('article')->value['content'];?>
</div><!-- .article-content -->
		<div class="article-footer">
			<div class="article-footer-right">
				
			</div><!-- .article-footer-right -->
			
			<div class="article-footer-left">
				<a href="<?php echo $_smarty_tpl->getVariable('back_url')->value;?>
">&laquo; <?php echo $_smarty_tpl->getVariable('app')->value->constants['articles']['label_back_url'];?>
</a>
			</div><!-- .article-footer-left -->
			
			<div class="article-footer-clear"></div><!-- .article-footer-clear -->
		</div><!-- .article-footer -->
	</div><!-- .article -->	
	<?php }?>
<?php }?>
</div>