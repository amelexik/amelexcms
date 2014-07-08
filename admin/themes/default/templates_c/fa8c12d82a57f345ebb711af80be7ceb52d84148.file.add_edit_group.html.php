<?php /* Smarty version Smarty-3.0.6, created on 2011-04-14 16:01:52
         compiled from "D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_group.html" */ ?>
<?php /*%%SmartyHeaderCode:39314da5b0559b5b48-06694019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8c12d82a57f345ebb711af80be7ceb52d84148' => 
    array (
      0 => 'D:/server/root/pmatools/admin/themes/default//templates/mode/add_edit_group.html',
      1 => 1302034028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39314da5b0559b5b48-06694019',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post">
	<table class="form-table">
		<tr>
			<td width="150"><label for="title"><b>Название групы</b></label></td>
			<td><input type="text" name="item[title]" id="title" value="" /></td>
		</tr>
		<tr>
			<td><label for="name">Системное название<br /><small class="grey">(латиницей без пробелов)</small></label></td>
			<td><input type="text" name="item[name]" id="name" value="" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="pAction" value="add_group" />
				<button class="button" type="submit">Добавить групу</button>			
			</td>
		</tr>
	</table>
</form>