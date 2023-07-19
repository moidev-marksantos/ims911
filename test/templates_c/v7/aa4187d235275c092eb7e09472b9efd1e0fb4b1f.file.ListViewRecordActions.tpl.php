<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 07:11:34
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21356790425fd03950c944a7-19602106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4187d235275c092eb7e09472b9efd1e0fb4b1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ListViewRecordActions.tpl',
      1 => 1607583844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21356790425fd03950c944a7-19602106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd03950cdd56',
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
<?php if ($_valid && !is_callable('content_5fd03950cdd56')) {function content_5fd03950cdd56($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)){?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value=='true'){?><span><a class="quickView ti-eye icon action" data-app="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']){?><span><a class="ti-pencil" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Edit"></a></span><?php }?><span><a class="ti-layout-media-overlay" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="Details"></a></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="ti-close"></i></button></div></div>
<?php }} ?>