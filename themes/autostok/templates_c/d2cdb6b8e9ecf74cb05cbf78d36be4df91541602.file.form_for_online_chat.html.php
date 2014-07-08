<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 23:14:31
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/form_for_online_chat.html" */ ?>
<?php /*%%SmartyHeaderCode:16192714414da60427b50a37-38409782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2cdb6b8e9ecf74cb05cbf78d36be4df91541602' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/form_for_online_chat.html',
      1 => 1302694351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16192714414da60427b50a37-38409782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="order1-tabs">
<ul>
	<li><a href="#tab-1">Отправка заказа на почту</a></li>
	<li><a href="#tab-2">Онлайн-чат заказ</a></li>			
</ul>
<div id="tab-1">
	<div class="container">	
		<div class="float_left" style="width:550px;">
			<form method="POST" id="orderByVinCode" class="user_form">
					
					<?php if ($_smarty_tpl->getVariable('queryStatus')->value=="completed"){?>
						
							<h1 style="font-size:11px;">Ваш запрос успешно отправлен!</h1>
							<p>Ваш запрос успешно отправлен!</p>
							<p>В течении 30 минут с Вами свяжеться наш менеджер</p>
							<p>Ожидайте.</p>
					
					<?php }else{ ?>	
					
					
							<?php if ($_smarty_tpl->getVariable('errors')->value){?>
								<div class="alert_block">
									<p><b>В прецессе отправки заказа обнаружены ошибки:</b></p>
									<ul>
										<?php  $_smarty_tpl->tpl_vars['error_info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['error_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error_info']->key => $_smarty_tpl->tpl_vars['error_info']->value){
 $_smarty_tpl->tpl_vars['error_key']->value = $_smarty_tpl->tpl_vars['error_info']->key;
?>
										<li><?php echo $_smarty_tpl->tpl_vars['error_info']->value;?>
</li>
										<?php }} ?>
									</ul>
								</div><!-- .alert_block -->
							<?php }?>	
							
							<div class="field">
								<div class="label"><label for="brand"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_4'];?>
:*</label></div><!-- .label -->
								<div class="input">
									<select id="brand" name="brand">
										<option value="">...</option>
										<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brands')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['brand']->key;
?>
										<option <?php if ($_smarty_tpl->getVariable('app')->value->branchKeys[1]==$_smarty_tpl->tpl_vars['brand']->value['id']){?>selected=selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</option>
										<?php }} ?>
									</select>
								</div><!-- input -->
							</div><!-- field -->

							<div class="field">
								<div class="label"><label for="model"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_5'];?>
:*</label></div><!-- .label -->
								<div class="input">
									<select id="model" name="model">
										<option value="">...</option>
									</select>
								</div><!-- input -->
							</div><!-- field -->

							<div class="field">
								<div class="label"><label for="year"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_6'];?>
:*</label></div><!-- .label -->
								<div class="input">
									<select name="year" id="year">
										<?php echo $_smarty_tpl->getVariable('years')->value;?>

									</select>
								</div><!-- input -->
							</div><!-- field -->					

							<div class="field">
								<div class="label"><label for="engine_type"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_8'];?>
:*</label></div><!-- .label -->
								<div class="input">
									<select name="engine_type" id="engine_type">
										<option value="">...</option>
										<option>Бензин</option>
										<option>Гибрид</option>
										<option>Дизель</option>
									</select>
								</div><!-- input -->
							</div><!-- field -->

							<div class="field">
								<div class="label"><label for="carCase"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_9'];?>
:*</label></div><!-- .label -->
								<div class="input">
									<select name="carCase" id="carCase">
										<option value="">...</option>
										<option>Седан</option> 
										<option>Хетчбэк</option> 
										<option>Купе</option> 
										<option>Универсал</option> 
										<option>Минивэн</option> 
										<option>Микроввэн</option> 
										<option>Внедорожник</option> 
										<option>Пикап</option> 
										<option>Кабриолет</option> 
										<option>Фургон</option> 
										<option>Родстер</option> 
										<option>Лимузин</option>
									</select>
								</div><!-- input -->
							</div><!-- field -->					

							<div class="field">
								<div class="label"><label for="engine_v"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_7'];?>
:*</label></div><!-- .label -->
								<div class="input"><input type="text" name="engine_v" id="engine_v" value="<?php echo $_POST['engine_v'];?>
" /></div><!-- input -->
							</div><!-- field -->


							<div class="field">
								<div class="label"><label for="vin"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_1'];?>
:*</label></div><!-- .label -->
								<div class="input"><input type="text" name="vin" id="vin" size="2" value="<?php echo $_POST['vin'];?>
" /></div><!-- input -->
							</div><!-- field -->


							<div class="field">
								<div class="label"><label for="phoneNum"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_2'];?>
:*</label></div><!-- .label -->
								<div class="input"><input type="text" name="phoneNum" id="phoneNum" value="<?php echo $_POST['phoneNum'];?>
" /></div><!-- input -->
							</div><!-- field -->


							<div class="field">
								<div class="label"><label for="email"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_3'];?>
:*</label></div><!-- .label -->
								<div class="input"><input type="text" name="email" id="email" value="<?php if ($_POST['email']){?><?php echo $_POST['email'];?>
<?php }else{ ?><?php echo $_SESSION['user']['email'];?>
<?php }?>" /></div><!-- input -->
							</div><!-- field -->


							<div class="field">
								<div class="label"><label for="part"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_10'];?>
:*</label></div><!-- .label -->
								<div class="input"><input type="text" name="part" id="part" value="<?php echo $_POST['part'];?>
" /></div><!-- input -->
							</div><!-- field -->


							<div class="field">
								<div class="label"><label for="comments"><?php echo $_smarty_tpl->getVariable('app')->value->constants['chat_form']['label_11'];?>
:</label></div><!-- .label -->
								<div class="input"><textarea id="comments" name="comments" style="height:100px"><?php echo $_POST['comments'];?>
</textarea></div><!-- input -->
							</div><!-- field -->

							<div class="field">
								<input type="hidden" name="postAction" value="order_by_vincode" />
								<button type="submit" class="button">Отправить заказ</button>
							</div><!-- field -->
					<?php }?>

			</form>
		</div><!-- .float_left -->
		
		<div class="float_right" style="width:350px;">
			<h3>Что такое VIN код (номер кузова)?</h3>
			<p>VIN код (номер кузова) - это заводской номер транспортного средства. В нем содержится подробная информация о всех технических характеристиках автомобиля.</p>
			
			<h3>Для чего нужно указывать VIN код?</h3>
			<p>VIN код необходим для того, чтобы менеджеры, нашей компании могли безошибочно определить каталожный номер необходимой Вам детали.</p>
			
			<h3>Просьба правильно описывать каждую деталь</h3>
			<p><span style="color:red"><b>Неправильно</b>: передняя стойка</span>
			<br /><span style="color:green"><b>Правильно</b>: передняя правая амортизационная стойка</span>
			 
			<br />Номер кузова (VIN код) находится  в техпаспорте вашего автомобиля в графе: 
			<br /><b>"Номер шасси (кузова, рамы)"</b>
			<br /><br /><img src="/upload/images/vin-img.jpg" style="border:#000 1px solid" />
			</p>
		</div><!-- .float_right -->
		
		<div style="clear:both; font-size:1px"></div>
	</div><!-- .container -->
</div>
<div id="tab-2">
	<p>
		<a href="https://siteheart.com/webconsultation/100057?byhref=1" target="siteheart_sitewindow_100057" onclick="o=window.open;o('https://siteheart.com/webconsultation/100057', 'siteheart_sitewindow_100057', 'width=550,height=400,top=30,left=30,resizable=yes'); return false;"><img src="http://autostok.com.ua/themes/autostok/img/4at.gif"  border="0" alt="SiteHeart" /></a>
	</p>
</div>