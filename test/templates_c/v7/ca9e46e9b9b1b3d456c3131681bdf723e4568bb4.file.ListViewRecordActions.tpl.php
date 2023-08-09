<?php /* Smarty version Smarty-3.1.7, created on 2023-08-09 19:36:40
         compiled from "/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212134344064d37a48ee4773-75523582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9e46e9b9b1b3d456c3131681bdf723e4568bb4' => 
    array (
      0 => '/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl',
      1 => 1691578347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212134344064d37a48ee4773-75523582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'MODULE' => 0,
    'QUICK_PREVIEW_ENABLED' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RECORD_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_64d37a48eeb69',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64d37a48eeb69')) {function content_64d37a48eeb69($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)){?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value=='true'){?><span><a class="quickView ti-eye icon action" data-app="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']){?><span><a class="ti-pencil" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Edit"></a></span><?php }?><span><a class="ti-layout-media-overlay" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Details"></a></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="ti-close"></i></button></div></div>
<?php }} ?>