<?php /* Smarty version Smarty-3.0.6, created on 2011-05-24 13:17:35
         compiled from "/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_order_item.html" */ ?>
<?php /*%%SmartyHeaderCode:5279528964ddb85bf681a98-89103934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f248fda627612547e944798ce3c4a5ace76e942f' => 
    array (
      0 => '/home/web154/domains/pma-tools.com.ua/public_html/admin/themes/default//templates/mode/edit_order_item.html',
      1 => 1303988603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5279528964ddb85bf681a98-89103934',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Редактирование заказа №<?php echo $_smarty_tpl->getVariable('orderData')->value['id'];?>
</h1>
">заказ 				
" />
</td>
</td>
</td>
</td>
</td>
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orderItemsData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['orderItem']->key => $_smarty_tpl->tpl_vars['orderItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['orderItem']->key;
?>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
 UAN</td>
 UAN</td>
</b> UAN</td>