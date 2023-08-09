<?php /* Smarty version Smarty-3.1.7, created on 2021-11-26 12:31:12
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1198358991619defc3d3c367-46817435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '816151bd3e1377b06e5ba1720a22d3265642a299' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198358991619defc3d3c367-46817435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619defc3d40d6',
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'MODULE' => 0,
    'QUICK_PREVIEW_ENABLED' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RECORD_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619defc3d40d6')) {function content_619defc3d40d6($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)){?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value=='true'){?><span><a class="quickView ti-eye icon action" data-app="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']){?><span><a class="ti-pencil" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Edit"></a></span><?php }?><span><a class="ti-layout-media-overlay" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Details"></a></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="ti-close"></i></button></div></div>
<?php }} ?>