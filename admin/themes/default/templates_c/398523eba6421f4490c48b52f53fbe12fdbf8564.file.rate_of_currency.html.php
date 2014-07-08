<?php /* Smarty version Smarty-3.0.6, created on 2011-04-15 15:06:22
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/sections/rate_of_currency.html" */ ?>
<?php /*%%SmartyHeaderCode:239574da834be248c71-53545601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398523eba6421f4490c48b52f53fbe12fdbf8564' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/sections/rate_of_currency.html',
      1 => 1302034030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239574da834be248c71-53545601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><a class="button" href="?section=<?php echo $_smarty_tpl->getVariable('admin')->value->section;?>
&gAction=updateRate">синхронизировать курс валют</a></p>

<p>
	<table class="table" width="100%">
		<thead>
			<tr>
				<td>NumCode</td>
				<td>CharCode</td>
				<td>Nominal</td>
				<td>Name</td>
				<td>Value</td>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rate_of_currency')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>	
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['NumCode'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['CharCode'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Nominal'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Value'];?>
</td>
			</tr>
			<?php }} ?> 
		</tbody>
	</table>
</p>