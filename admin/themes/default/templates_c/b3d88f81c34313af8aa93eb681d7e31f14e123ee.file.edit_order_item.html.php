<?php /* Smarty version Smarty-3.0.6, created on 2011-04-19 15:17:10
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/edit_order_item.html" */ ?>
<?php /*%%SmartyHeaderCode:54794dad7d46483251-08400403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d88f81c34313af8aa93eb681d7e31f14e123ee' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/edit_order_item.html',
      1 => 1303215430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54794dad7d46483251-08400403',
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