<?php /* Smarty version Smarty-3.0.6, created on 2011-04-28 10:35:13
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_product.html" */ ?>
<?php /*%%SmartyHeaderCode:297554db918b18a0050-07908719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62594b0c4efa02a8799f677c3929bcf60c825317' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_product.html',
      1 => 1303914930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297554db918b18a0050-07908719',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Редактирование свойств товара</h1><form method="post">	<div id="langtabs">		<ul>			<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>				<li><a href="#lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>			<?php }} ?>		</ul>				<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['lang_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin')->value->languages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
 $_smarty_tpl->tpl_vars['lang_id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>		<div class="langtab_div" id="lang-<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">			<table class="form-table">				<tr>					<td width="150"><label for="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Название товара:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][title]" id="title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['title'];?>
" /></td>				</tr>				<tr>					<td><label for="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Транслитерация:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][translit]" id="translit_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['translit'];?>
" /></td>				</tr>				<tr>					<td><label for="units_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Еденицы измерения:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][units]" id="units_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['units'];?>
" /></td>				</tr>				<tr>					<td><label for="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Титл:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_title]" id="meta_title_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_title'];?>
" /></td>				</tr>				<tr>					<td><label for="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Описание:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_description]" id="meta_description_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_description'];?>
" /></td>				</tr>				<tr>					<td><label for="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">Ключевые слова:</label></td>					<td><input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
][meta_keywords]" id="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('product')->value['ext'][$_smarty_tpl->tpl_vars['lang_id']->value]['meta_keywords'];?>
" /></td>				</tr>							</table>		</div>		<?php }} ?>						<div class="langtab_div">			<table class="form-table">				<tr>					<td width="150"><label for="display"><b>Статус:</b></label></td>					<td>						<select name="product[display]" id="display">							<option <?php if ($_smarty_tpl->getVariable('product')->value['display']=='y'){?>selected="selected"<?php }?> value="y">Отображать</option>							<option <?php if ($_smarty_tpl->getVariable('product')->value['display']=='n'){?>selected="selected"<?php }?> value="n">Скрыть</option>						</select>					</td>				</tr>				<tr>					<td><label for="eurocode">Еврокод:</label></td>					<td><input type="text" name="product[eurocode]" id="eurocode" value="<?php echo $_smarty_tpl->getVariable('product')->value['eurocode'];?>
" /></td>				</tr>				<tr>					<td><label for="currency">Валюта:</label></td>					<td><input type="text" name="product[currency]" id="currency" value="<?php echo $_smarty_tpl->getVariable('product')->value['currency'];?>
" /></td>				</tr>				<tr>					<td><label for="trade_price">Оптовая цена:</label></td>					<td><input type="text" name="product[trade_price]" id="trade_price" value="<?php echo $_smarty_tpl->getVariable('product')->value['trade_price'];?>
" /></td>				</tr>				<tr>					<td><label for="retail_price">Розничная цена:</label></td>					<td><input type="text" name="product[retail_price]" id="retail_price" value="<?php echo $_smarty_tpl->getVariable('product')->value['retail_price'];?>
" /></td>				</tr>			</table>		</div>		<div class="langtab_div">			<input type="hidden" name="pAction" value="update_product" />			<input type="hidden" id="product_id" name="product[item_id]" value="<?php echo $_smarty_tpl->getVariable('product')->value['item_id'];?>
" />			<input type="hidden" name="product[category_master_id]" value="<?php echo $_smarty_tpl->getVariable('product')->value['category_master_id'];?>
" />			<button name="submit_mode" value="set" type="submit">Применить</button>			<button name="submit_mode" value="save" type="submit">Сохранить</button>		</div>	</div><!-- #langtabs --></form>	<style>	#sortable-product-pics 	{ 		list-style-type: none; 		margin: 0; 		padding: 0; 	}		#sortable-product-pics li 	{ 		padding: 1px; 		float: left; 		width: 100px; 		height: 140px; 		bor der:#ff0000 1px solid;		height: 150px; 		font-size: 4em; 		text-align: center; 		cursor:move; 		display:inline-block;		font-size:11px;	}	.drop_buttom_box	{		width:100%;		height:20px;		line-height:20px;	}			.drop_buttom_box a{text-decoration:none;cursor:pointer}			.drop_buttom_box a:hover{color:red}	</style>	<script>	jQuery(function() {		jQuery("#sortable-product-pics").sortable({			//axis: 'x',			distance: 10,			opacity: 0.8,			items: 'li', 						change: function(event, ui) {				ui.helper.css("color","#f00");				ui.helper.css("font-weight","bold");				ui.helper.css("border-color","red");			},			update : function () {				sorting_result = jQuery("#sortable-product-pics").sortable("toArray");				product_id = jQuery("#product_id").attr("value");				jQuery.ajax({					url: "/admin/admin.ajax.php",					type: "POST",					data: ({						ajaxSection : 'sortable',						ajaxMode : 'sortable_product_pics', 						ajaxAction : 'sortable_product_pics',						product_id : product_id,						sorting_result : sorting_result					}),					success: function(result){						//alert(result);					}				});			}		});						//jQuery( "#sortable-product-pics" ).disableSelection();				jQuery(".drop_product_pic").click(function(){			var photo_id = jQuery(this).attr("photo_id");			var li_id = jQuery(this).attr("li_id");			jQuery.ajax({				url: "/admin/admin.ajax.php",				type: "POST",				data: ({					ajaxSection : 'catalog',					ajaxAction : 'drop_product_pic',					photo_id : photo_id				}),				success: function(result){					jQuery("li#"+li_id).remove();				}			});					});	});	</script><p>	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">		<div class="langtab_div">			<?php if ($_smarty_tpl->getVariable('product')->value['photos']){?>			<h1>Фотки:</h1>								<ul id="sortable-product-pics">				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?>				<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>					<li id="id_<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" style="padding:10px; position:relative">						<table>							<tr>								<td style="height:100px; overflow:hidden; border:#ccc 1px solid;" valign="middle">									<img src="<?php echo @CATALOG_PRODUCTS_IMAGE_PATH;?>
100x/<?php echo $_smarty_tpl->tpl_vars['photo']->value['file'];?>
" />								</td>							</tr>							<tr>								<td>									<div class="drop_buttom_box">										<a class="drop_product_pic" li_id="id_<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" photo_id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
">Удалить [x]</a>									</div>								</td>							</tr>						</table>					</li>				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->getVariable('num')->value+1, null, null);?>				<?php }} ?>				</ul>									<?php }else{ ?>						<h1>Для даного товара не загружена ни одна фотография.</h1>						<?php }?>			<div class="clear"></div>		</div>	</div></p><p><div class="ui-tabs ui-widget ui-widget-content ui-corner-all">	<!-- Framework CSS -->	<link rel="stylesheet" href="/js/fancyupload/fancyupload.css" type="text/css" media="all">	<script type="text/javascript" src="/js/mootools.js"></script>	<script type="text/javascript" src="/js/fancyupload/source/Swiff.Uploader.js"></script>	<script type="text/javascript" src="/js/fancyupload/source/Fx.ProgressBar.js"></script>	<script type="text/javascript" src="/js/fancyupload/source/FancyUpload2.js"></script>	<script src="/js/fancyupload/script.js" type="text/javascript"></script>	<div class="langtab_div">	<div id="upload-form">		<h1>Загрузка фотографий для продукта</h1>		<div>					<form action="/js/fancyupload/server/upload_products_photo.php?product_item_id=<?php echo $_GET['product_item_id'];?>
" method="post" enctype="multipart/form-data" id="form-demo" album_id="<?php echo $_GET['album_id'];?>
">								<fieldset id="demo-fallback">					<legend>File Upload</legend>					<p>					This form is just an example fallback for the unobtrusive behaviour of FancyUpload.					If this part is not changed, something must be wrong with your code.					</p>					<label for="demo-photoupload">					Upload a Photo:					<input type="file" name="Filedata" />					</label>				</fieldset>								<div id="demo-status" class="hide">					<p>					<a href="#" id="demo-browse" style="color:red">Выбрать файлы</a> |					<a href="#" id="demo-clear">Очистить список</a> |					<a href="#" id="demo-upload">Начать загрузку</a>					</p>					<div>					<strong class="overall-title"></strong><br />					<img src="/js/fancyupload/assets/progress-bar/bar.gif" class="progress overall-progress" />					</div>					<div>					<strong class="current-title"></strong><br />					<img src="/js/fancyupload/assets/progress-bar/bar.gif" class="progress current-progress" />					</div>					<div class="current-text"></div>				</div>								<ul id="demo-list"></ul>			</form>					</div>	</div><!-- #upload-form -->	</div>	<div class="langtab_div">		<button type="button" onclick="document.forms.photos.submit()">сохранить изменения</button>	</div>	</div></p>