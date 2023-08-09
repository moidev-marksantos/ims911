<?php /* Smarty version Smarty-3.1.7, created on 2021-02-08 03:59:24
         compiled from "/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/RecycleBin/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12623850066020b71c04af38-05042647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac493ba99358d772f79295cc7517292cde2118d' => 
    array (
      0 => '/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/RecycleBin/ListViewRecordActions.tpl',
      1 => 1607521430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12623850066020b71c04af38-05042647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEARCH_MODE_RESULTS' => 0,
    'LISTVIEW_ENTRY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6020b71c05485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6020b71c05485')) {function content_6020b71c05485($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><span class="restoreRecordButton"><i title="<?php echo vtranslate('LBL_RESTORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-refresh alignMiddle"></i></span><span class="deleteRecordButton"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></span></div><?php }} ?>