<?php /* Smarty version Smarty-3.1.7, created on 2021-09-24 09:23:35
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Settings\ITS4YouPicklistImport\ImportValuesToRole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065042388614d7cf79e82d8-77619318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a3c7480b38e727c5183271fe16aeb63d381bb5' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Settings\\ITS4YouPicklistImport\\ImportValuesToRole.tpl',
      1 => 1607586392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2065042388614d7cf79e82d8-77619318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'SELECTED_PICKLIST_FIELDMODEL' => 0,
    'SELECTED_PICKLISTFIELD_ALL_VALUES' => 0,
    'HEADER_TITLE' => 0,
    'ROLES_LIST' => 0,
    'ROLE' => 0,
    'qualifiedName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_614d7cf7b2f4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614d7cf7b2f4e')) {function content_614d7cf7b2f4e($_smarty_tpl) {?>
<div class='modelContainer modal basicAssignValueToRoleView'><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate('LBL_IMPORT_VALUES_TO_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><div class="modalContents"><div class="modal-dialog basicCreateView"><div class='modal-content'><form id="importValuesToRoleForm" name="importValuesToRoleForm"  class="form-horizontal" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="IndexAjax" /><input type="hidden" name="mode" value="importValuesToRole" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('name');?>
" /><input type="hidden" name="pickListValues" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value));?>
' /><?php ob_start();?><?php echo vtranslate('LBL_IMPORT_ITEM_TO','ITS4YouPicklistImport');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="form-group"><div class="control-label col-sm-3 col-xs-3"><?php echo vtranslate('LBL_ITEM_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></div><div class="controls col-sm-3 col-xs-3"><input type="file" name="import_file" id="import_file" onchange="ImportJs.checkFileType()"/></div></div><!--<?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()){?><div class="form-group"><div class="control-label col-sm-3 col-xs-3"><?php echo vtranslate('LBL_ASSIGN_TO_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls col-sm-3 col-xs-3"><select class="rolesList form-control" name="rolesSelected[]" multiple style="min-width: 220px" data-placeholder="<?php echo vtranslate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="all" selected><?php echo vtranslate('LBL_ALL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->key => $_smarty_tpl->tpl_vars['ROLE']->value){
$_smarty_tpl->tpl_vars['ROLE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('rolename');?>
</option><?php } ?></select></div></div><?php }?>     --!><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()){?><div class="form-group"><div class="control-label col-sm-3 col-xs-3"><?php echo vtranslate('LBL_ASSIGN_TO_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="controls"><select class="rolesList select2" id="rolesSelected" name="rolesSelected[]" multiple style="min-width: 220px" data-placeholder="<?php echo vtranslate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="all" selected><?php echo vtranslate('LBL_ALL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->key => $_smarty_tpl->tpl_vars['ROLE']->value){
$_smarty_tpl->tpl_vars['ROLE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('rolename');?>
</option><?php } ?></select></div></div><?php }?></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['qualifiedName']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div></div>
<?php }} ?>