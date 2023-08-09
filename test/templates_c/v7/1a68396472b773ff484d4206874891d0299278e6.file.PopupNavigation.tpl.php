<?php /* Smarty version Smarty-3.1.7, created on 2021-02-08 03:24:50
         compiled from "/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Vtiger/PopupNavigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6980759236020af023fca04-76905852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a68396472b773ff484d4206874891d0299278e6' => 
    array (
      0 => '/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Vtiger/PopupNavigation.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6980759236020af023fca04-76905852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MULTI_SELECT' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6020af02404fc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6020af02404fc')) {function content_6020af02404fc($_smarty_tpl) {?>

<div class="col-md-2"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)){?><button class="select btn btn-default" disabled="disabled"><strong><?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><?php }else{ ?>&nbsp;<?php }?></div><div class="col-md-10"><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div><?php }} ?>