<?php /* Smarty version Smarty-3.1.7, created on 2021-03-17 01:04:28
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8999926966051559cc483c6-81497419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '759fa1297bf4cabb816700f02c99a3c40cfc4fcd' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewRecordActions.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8999926966051559cc483c6-81497419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'RECORD_SOURCE_MODULE' => 0,
    'RECORD_SOURCE_FIELD' => 0,
    'RECORD_TARGET_FIELD' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6051559cc50e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6051559cc50e3')) {function content_6051559cc50e3($_smarty_tpl) {?>
<div class="table-actions"><?php $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourceModule'), null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourcefield'), null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('targetfield'), null, 0);?><span class="fa fa-pencil" onclick="javascript:Settings_PickListDependency_Js.triggerEdit(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="fa fa-trash-o" onclick="javascript:Settings_PickListDependency_Js.triggerDelete(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></div><?php }} ?>