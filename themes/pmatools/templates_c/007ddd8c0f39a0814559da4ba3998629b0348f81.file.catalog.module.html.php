<?php /* Smarty version Smarty-3.0.6, created on 2012-07-03 12:34:27
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/catalog.module.html" */ ?>
<?php /*%%SmartyHeaderCode:11677657744ff2bca3174507-76485869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '007ddd8c0f39a0814559da4ba3998629b0348f81' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/themes/pmatools/templates/catalog.module.html',
      1 => 1341308065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11677657744ff2bca3174507-76485869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link href="<?php echo $_smarty_tpl->getVariable('theme_path')->value;?>
css/catalog.module.css" rel="stylesheet" type="text/css" />

<a style="display:none" href="/cartoverlay/?back=<?php echo $_SERVER['REQUEST_URI'];?>
" id="fancyClick">cartoverlay</a>
<a style="display:none" id="clearCart" href="#">clearCart</a>
<a style="display:none" href="#" id="getCartCount">getCartCount</a>
<a style="display:none" href="#" id="getCartTotalPrice">getCartTotalPrice</a>

<div id="catalog">
<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']){?>
	<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=="show_categories"||$_smarty_tpl->getVariable('app')->value->module['mode']=="show_sub_categories"){?>
		
		<?php if ($_smarty_tpl->getVariable('categories')->value){?>
			
			<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=="show_categories"){?>
				<h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['catalog']['zaglavie_glavnoj_stranicy'];?>
</h1>
			<?php }?>
			
			<div class="categories">
				<?php $_smarty_tpl->tpl_vars['iteration'] = new Smarty_variable(1, null, null);?>
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
				<div class="category <?php if ($_smarty_tpl->getVariable('iteration')->value%4==1){?>first<?php }?> <?php if ($_smarty_tpl->getVariable('iteration')->value%4==0){?>last<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
" title="категория: <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
">
						<div class="category_content" <?php if ($_smarty_tpl->tpl_vars['category']->value['category_image']){?>style="background:#ccc url(<?php echo @CATALOG_CATEGORIES_IMAGE_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['category_image'];?>
) no-repeat center center;"<?php }?>>
							<div class="category_arrow"></div>
						</div><!-- .category_content -->
					</a>
					<div class="category_title">
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tr><td height="46" valign="middle" align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a></td></tr>
						</table>
					</div><!-- .category_title -->
				</div><!-- .category -->
				<?php if ($_smarty_tpl->getVariable('iteration')->value%4==0){?><div class="hr clear"></div><?php }?>
				<?php $_smarty_tpl->tpl_vars['iteration'] = new Smarty_variable($_smarty_tpl->getVariable('iteration')->value+1, null, null);?>
				<?php }} ?>
				
				<div class="clear"></div><!-- .clear -->
				
			</div><!-- .categories -->
			
		<?php }?>
	
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=="show_products"){?>
			<h1>Продукты</h1>
			<div class="data_table_container">
				<table class="table2" id="productsTable" width="100%">
					<thead>
						<tr>
							<th width="1%">#</th>
							<th width="400">Название</th>
							<th width="1%">Валюта</th>
							<th width="1%">Цена</th>
							<th width="1%"></th>
						</tr>
					</thead>
					<tbody>
					<?php if ($_smarty_tpl->getVariable('products')->value){?>
						<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
							<tr>
								<td align="center"><?php echo $_smarty_tpl->getVariable('num')->value;?>
</td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a></td>
								<td align="center">грн.</td>
								<td align="center"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
								<td>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['inCart']){?>
								<a class="toCart added"></a>
								<?php }else{ ?>
								<a rel="basketIco" class="toCart" 
										item_id="<?php echo $_smarty_tpl->tpl_vars['product']->value['item_id'];?>
" 
										category_master_id="<?php echo $_smarty_tpl->tpl_vars['product']->value['category_master_id'];?>
" 
										eurocode="<?php echo $_smarty_tpl->tpl_vars['product']->value['eurocode'];?>
" 
										articul="<?php echo $_smarty_tpl->tpl_vars['product']->value['articul'];?>
" 
										currency="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
" 
										trade_price="<?php echo $_smarty_tpl->tpl_vars['product']->value['trade_price'];?>
" 
										retail_price="<?php echo $_smarty_tpl->tpl_vars['product']->value['retail_price'];?>
" 
										price="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" 
										item_title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
"
										></a>
								<?php }?>
										
								</td>
							</tr>
						<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>
						<?php }} ?>
					<?php }?>
					</tbody>
				</table>
			</div><!-- .data_table_container -->
	
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=="show_product"){?>
		<h1><?php echo $_smarty_tpl->getVariable('product_data')->value['title'];?>
</h1>
										
		
		<div class="product">
		
		<p>
			<table class="product_Pic_and_Data">
				<tr>
					<td class="product_pic_TD">
						<div class="product_pic">
							<?php if ($_smarty_tpl->getVariable('product_data')->value['start_photo']){?>
								<img id="product_large_pic" src="<?php echo @CATALOG_PRODUCTS_IMAGE_PATH;?>
300x/<?php echo $_smarty_tpl->getVariable('product_data')->value['start_photo']['file'];?>
" />
							<?php }else{ ?>
								<table class="no_product_photo"><tr><td>Фото отсутствует</td></td></table>
							<?php }?>
						</div><!-- .product_pic -->
						<p>цена:<span style="font-size:18px; font-weight:bold; color:#666"><?php echo $_smarty_tpl->getVariable('product_data')->value['price'];?>
</span> грн.</p>
						<p>
							<div class="purchase_button">
								<a rel="basketIco" class="toCart" 
										item_id="<?php echo $_smarty_tpl->getVariable('product_data')->value['item_id'];?>
" 
										category_master_id="<?php echo $_smarty_tpl->getVariable('product_data')->value['category_master_id'];?>
" 
										eurocode="<?php echo $_smarty_tpl->getVariable('product_data')->value['eurocode'];?>
" 
										articul="<?php echo $_smarty_tpl->getVariable('product_data')->value['articul'];?>
" 
										currency="<?php echo $_smarty_tpl->getVariable('product_data')->value['currency'];?>
" 
										trade_price="<?php echo $_smarty_tpl->getVariable('product_data')->value['trade_price'];?>
" 
										retail_price="<?php echo $_smarty_tpl->getVariable('product_data')->value['retail_price'];?>
" 
										price="<?php echo $_smarty_tpl->getVariable('product_data')->value['price'];?>
" 
										item_title="<?php echo $_smarty_tpl->getVariable('product_data')->value['title'];?>
"
										>купить</a>
							</div><!-- .purchase_button -->
						</p>
					</td><!-- .product_pic_TD -->
					
					<td class="product_info_TD">
						<ul>
							<li>Название товара: <b><?php echo $_smarty_tpl->getVariable('product_data')->value['title'];?>
</b></li>
							<li>цена: <b style="font-size:16px"><?php echo $_smarty_tpl->getVariable('product_data')->value['price'];?>
 грн.</b></li>
							<li>еденицы измерения: <b><?php echo $_smarty_tpl->getVariable('product_data')->value['units'];?>
</b></li>
							<?php if ($_smarty_tpl->getVariable('product_data')->value['eurocode']!=" "){?><li>еврокод: <b><?php echo $_smarty_tpl->getVariable('product_data')->value['eurocode'];?>
</b></li><?php }?>
							<?php if ($_smarty_tpl->getVariable('product_data')->value['articul']!=" "){?><li>артикул: <b><?php echo $_smarty_tpl->getVariable('product_data')->value['articul'];?>
</b></li><?php }?>
							<?php if ($_smarty_tpl->getVariable('product_data')->value['meta_description']!=''){?><li>описание: <b><?php echo $_smarty_tpl->getVariable('product_data')->value['meta_description'];?>
</b></li><?php }?>
						</ul>
					</td><!-- .product_info_TD -->
				</tr>
				
				
			</table>
		</p>
		
		
		<?php if ($_smarty_tpl->getVariable('product_data')->value['photos']){?>
		<h2>Фото:</h2>
		
		
		<p>
			<div class="product_pics_thumbs">
			
				<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product_data')->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>
					<a title="<?php echo $_smarty_tpl->getVariable('product_data')->value['title'];?>
" class="thumb" filename="<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" path_300x="<?php echo @CATALOG_PRODUCTS_IMAGE_PATH;?>
300x/" href="<?php echo @CATALOG_PRODUCTS_IMAGE_PATH;?>
300x/<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" style="background:#ccc url(<?php echo @CATALOG_PRODUCTS_IMAGE_PATH;?>
100x/<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
) no-repeat center center"></a>
				<?php }} ?>
				
				<div class="clear"></div>

			</div>
		</p>
		<?php }?>
		
		
		</div><!-- .product -->
		
		<?php if ($_smarty_tpl->getVariable('other_products')->value){?>
		<h2>Другие товары из этой категории:</h2>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('other_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
			<?php }} ?>
		</ul>
		<?php }?>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->getVariable('static_content')->value){?>
<div style="margin:10px 0"><?php echo $_smarty_tpl->getVariable('static_content')->value;?>
</div>
<?php }?>

</div><!-- #catalog -->