<?php /* Smarty version Smarty-3.0.6, created on 2011-04-13 14:39:59
         compiled from "/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cart.module.html" */ ?>
<?php /*%%SmartyHeaderCode:19806621764da58b8f4f3e26-02161843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e22e185f101be889561ba55f7214baecd7242f38' => 
    array (
      0 => '/home/web20/domains/autostok.com.ua/public_html/themes/autostok2/templates/cart.module.html',
      1 => 1302694517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19806621764da58b8f4f3e26-02161843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="cart">
<?php if ($_smarty_tpl->getVariable('app')->value->module['mode']=='order'){?>
	<h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['page_header'];?>
</h1>
	
	<p>
	<table class="table2 cart-table">
		<thead>
			<tr>
				<td width="1%">#</td>
				<td>Бренд</td>
				<td>Номер детали</td>
				<td>Наименование детали</td>
				<td width="1%">Цена</td>
				<td width="1%">кол.</td>
				<td width="1%">сумма</td>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fullCart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['totalPrice'];?>
</td>
			</tr>
			<?php }} ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7" align="right">итого: <b style="font-size:18px"><?php echo $_smarty_tpl->getVariable('cart')->value->cartTotalPrice();?>
 UAN</b></td>
			</tr>
		</tfoot>
	</table>	
	</p>
	
	<?php if (!$_SESSION['user']['is_logged']){?>
		
		<p><b>Без регистрации</b> - это в том случае, если вы планируете сделать покупку единожды в нашем магазине.<p>
		<p><b>Для зарегистрированных пользователей</b> - это если вы уже зарегистрированы у нас или хотите зарегистрироваться. Регистрация дает вам возможность не задавать адреса доставок в следующий раз, видеть историю заказов и иметь накопительную систему скидок.</p>
		
		<div id="order-tabs">
			<ul>
				<li><a href="#tab-1">Для зарегестрированых пользователей</a></li>
				<li><a href="#tab-2">Без регистрации</a></li>
				<li><a href="#tab-3"><b style="color:red">Регистрация</b></a></li>
			</ul>
			
			<div id="tab-1">
				<div class="container">
					<p class="b info">Войдите в систему:</p>
					<p>
						<form method="post" class="form">
							<input type="hidden" name="postAction" value="authorization" />
							<table width="300">
								<tr>
									<td width="1%"><label for="login1">ваш логин:</label></td>
									<td><input type="text" name="login" id="login1" /></td>
								</tr>
								<tr>
									<td><label for="password1">пароль:</label></td>
									<td><input type="password" name="password" id="password1" /></td>
								</tr>
								<tr>
									<td width="1%" align="left"><a class="float_left" id="register_link" href="<?php echo $_smarty_tpl->getVariable('app')->value->registrationPageUrl;?>
">регистрация</a></td>
									<td align="right"><button class="button">войти &raquo;</button></td>
								</tr>
							</table>
						</form>
					</p>
				</div><!-- .container -->
			</div><!-- #tab-1 -->
			
			<div id="tab-2">	
				<div class="container">
					<p class="b info">Вы можете произвести покупку без регистрации, как розничный клиент.<br />Заполните форму ниже</p>
					<?php if ($_smarty_tpl->getVariable('errors')->value){?>
						<div class="alert_block">
							<p><b>В прецессе регистрации произошли следущие ошибки:</b></p>
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
					<form method="post" class="form">
						<p>
						<table width="100%" cellspacing="8" border="0">
							<tr>
								<td width="200"><label for="name"><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['label_name'];?>
:*</label></td>
								<td><input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>
" /></td>
							</tr>
							<tr>
								<td><label for="country"><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['label_country'];?>
:*</label></td>
								<td><input type="text" name="country" id="country" value="<?php echo $_POST['country'];?>
" /></td>
							</tr>
							<tr>
								<td><label for="city"><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['labal_city'];?>
:*</label></td>
								<td><input type="text" name="city" id="city" value="<?php echo $_POST['city'];?>
" /></td>
							</tr>
							<tr>
								<td><label for="phone_num"><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['label_phone_num'];?>
:*</label></td>
								<td><input type="text" name="phone_num" id="phone_num" value="<?php echo $_POST['phone_num'];?>
" /></td>
							</tr>
							<tr>
								<td><label for="email"><?php echo $_smarty_tpl->getVariable('app')->value->constants['order_form']['label_email'];?>
:*</label></td>
								<td><input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" /></td>
							</tr>
							<tr>
							<td width="200"><label for="delivery_method">Способ доставки:*</td>
							<td>
								<select name="delivery_method" id="delivery_method" style="width:300px">
									<option value="none">...</option>
									<option id="delivery_method_1">Самовывоз</option>
									<option id="delivery_method_2">курьером</option>
									<option id="delivery_method_3">Автолюкс, Гюнсел, Нова Почта</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200"><label for="payment_method">Метод оплаты:*</td>
							<td>
								<select name="payment_method" id="payment_method" style="width:300px">
									<option value="none">...</option>
									<option>Наличными</option>
									<option>Безналичными</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200"><label for="time_of_delivery">Удобное время доставки:*</td>
							<td>
								<select name="time_of_delivery" id="time_of_delivery" style="width:300px">
									<option value="none">...</option>
									<option>8:00-12:00</option>
									<option>12:00-15:00</option>
									<option>15:00-18:00</option>
									<option>Не имеет значения</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200"><label for="comments">Особые примечания:</td>
							<td>
								<textarea name="comments"  id="comments" style="height:100px"><?php echo $_POST['comments'];?>
</textarea>
							</td>
						</tr>
						</table>
						</p>
						
						<p align="center">
							<input type="hidden" name="buyer_type" value="simple" />
							<button style="width:200px;" class="button" type="submit" name="postAction" value="order"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_order'];?>
</button>
						</p>
					
					</form>
				</div><!-- .container -->
			</div><!-- #tab-2 -->
			
			<div id="tab-3"><?php $_template = new Smarty_Internal_Template("registration_form.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div><!-- #tab-3 -->
		
		</div><!-- #order-tabs -->
		
	<?php }else{ ?>
	
		<h1>Привет <b><?php echo $_SESSION['user']['name'];?>
</b></h1>
		
		<div class="container">
		
		<p>Для продолжения оформления заказа уточните пожалуйста следующие данные:</p>
		
		<?php if ($_smarty_tpl->getVariable('errors')->value){?>
			<div class="alert_block">
				<p><b>В прецессе регистрации произошли следущие ошибки:</b></p>
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
		
		<p>
			<form class="form" method="post">
				<table width="100%" cellspacing="8" border="0">
					<tr>	
						<td width="200"><label for="delivery_method">Способ доставки:*</label></td>
						<td>
							<select name="delivery_method" id="delivery_method" style="width:300px">
								<option value="none">...</option>
								<option id="delivery_method_1">Самовывоз</option>
								<option id="delivery_method_2">курьером</option>
								<option id="delivery_method_3">Автолюкс, Гюнсел, Нова Почта</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="payment_method">Метод оплаты:*</td>
						<td>
							<select name="payment_method" id="payment_method" style="width:300px">
								<option value="none">...</option>
								<option>Наличными</option>
								<option>Безналичными</option>
							</select>
						</td>
					</tr>
					<tr id="time_of_delivery_row">
						<td><label for="time_of_delivery">Удобное время доставки:*</td>
						<td>
							<select name="time_of_delivery" id="time_of_delivery" style="width:300px">
								<option value="none">...</option>
								<option>8:00-12:00</option>
								<option>12:00-15:00</option>
								<option>15:00-18:00</option>
								<option>Не имеет значения</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="comments">Особые примечания:</td>
						<td>
							<textarea name="comments"  id="comments" style="height:100px"></textarea>
						</td>
					</tr>
				</table>
				<p align="center">
					<input type="hidden" name="buyer_type" value="site_user" />
					<button style="width:200px;" class="button" type="submit" name="postAction" value="order"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_order'];?>
</button>
				</p>
			</form>
		</p>
		
		</div>
	
	<?php }?>
	
<?php }elseif($_smarty_tpl->getVariable('app')->value->module['mode']=='orderfinish'){?>

<h1 style="font-size:11px">Ваш запрос успешно отправлен!</h1>

<div class="info_block">
	<p>Ваш запрос успешно отправлен! <a id="printCart" class="print">Распечатать заказ</a></p>
	<p>В течении 30 минут с Вами свяжеться наш менеджер</p>
	<p>Ожидайте.</p>
</div>
<p>
	<table class="table2 cart-table">
		<thead>
			<tr>
				<td width="1%">#</td>
				<td>Бренд</td>
				<td>Номер детали</td>
				<td>Наименование детали</td>
				<td width="1%">Цена</td>
				<td width="1%">кол.</td>
				<td width="1%">сумма</td>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION['orderData']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['totalPrice'];?>
</td>
			</tr>
			<?php }} ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="8">
					<div style="float:left">
					</div>
					<div style="float:right">итого: <b style="font-size:18px"><?php echo $_SESSION['orderData']['cart_total_price'];?>
 UAN</b></div>
				</td>
			</tr>
		</tfoot>
	</table>	
</p>
<?php }else{ ?>
	<h1><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['page_header'];?>
</h1>
	<?php if ($_smarty_tpl->getVariable('fullCart')->value){?>
	<div class="container">
		<form method="post">
			<p>
				<table class="table2 cart-table">
					<thead>
						<tr>
							<td width="1%">#</td>
							<td>Бренд</td>
							<td>Номер детали</td>
							<td>Наименование детали</td>
							<td width="1%">Цена</td>
							<td width="1%">кол.</td>
							<td width="1%">сумма</td>
							<td width="1%"></td>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fullCart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
							<td><input class="quantity" type="text" name="quantity[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" /></td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['totalPrice'];?>
</td>
							<td><a class="dropItem" href="/cart/?getAction=dropItem&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></a></td>
						</tr>
						<?php }} ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="8" align="right">итого: <b style="font-size:18px"><?php echo $_smarty_tpl->getVariable('cart')->value->cartTotalPrice;?>
 UAN</b></td>
						</tr>
					</tfoot>
				</table>	
			</p>
			<p style="text-align:right">
				<button class="button" name="postAction" value="updateCart" type="submit"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_calculate'];?>
</button>
				<a class="button" href="/cart/order/"><?php echo $_smarty_tpl->getVariable('app')->value->constants['cart']['label_order'];?>
</a>
			</p>
		</form>
	</div><!-- .container -->
	<?php }else{ ?>
	<p>Корзина покупок пустая.</p>
	<?php }?>
<?php }?>
</div><!-- #cart -->