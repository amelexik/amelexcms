<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 20:50:41
         compiled from "D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/rate_of_currency.html" */ ?>
<?php /*%%SmartyHeaderCode:238274da733f1cb0217-75125901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7f4fd721ffecdaabbefed468f7ceb9f0c24ed0' => 
    array (
      0 => 'D:/server/wwwroot/pmatools/admin/themes/default//templates/sections/rate_of_currency.html',
      1 => 1302034030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238274da733f1cb0217-75125901',
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