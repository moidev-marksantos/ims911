<?php /* Smarty version Smarty-3.1.7, created on 2021-07-07 02:28:25
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\RecycleBin\ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122551630060e51149cba420-90655801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fc21be7fb22fc74829df05a3f3dbe8dd6bf2c00' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\RecycleBin\\ListViewRecordActions.tpl',
      1 => 1607568230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122551630060e51149cba420-90655801',
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
  'unifunc' => 'content_60e51149d17f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e51149d17f8')) {function content_60e51149d17f8($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><span class="restoreRecordButton"><i title="<?php echo vtranslate('LBL_RESTORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-refresh alignMiddle"></i></span><span class="deleteRecordButton"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></span></div><?php }} ?>