<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 07:04:34
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Calendar\ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16319521225fd1c0b9806fe9-08586572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c8130c40e9ace7eda09e661fb5fd7f6448a2602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Calendar\\ListViewRecordActions.tpl',
      1 => 1607583844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16319521225fd1c0b9806fe9-08586572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd1c0b9845c1',
  'variables' => 
  array (
    'SEARCH_MODE_RESULTS' => 0,
    'LISTVIEW_ENTRY' => 0,
    'MODULE' => 0,
    'QUICK_PREVIEW_ENABLED' => 0,
    'MODULE_MODEL' => 0,
    'IS_MODULE_EDITABLE' => 0,
    'EDIT_VIEW_URL' => 0,
    'IS_CREATE_PERMITTED' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RECORD_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd1c0b9845c1')) {function content_5fd1c0b9845c1($_smarty_tpl) {?>

<div class="table-actions calendar-table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)){?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value=='true'){?><span><a class="quickView fa fa-eye icon action" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()){?><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['EDIT_VIEW_URL'] = new Smarty_variable($_tmp1, null, 0);?><?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value&&$_smarty_tpl->tpl_vars['EDIT_VIEW_URL']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus')!=vtranslate('Held',$_smarty_tpl->tpl_vars['MODULE']->value)&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus')!=vtranslate('Completed',$_smarty_tpl->tpl_vars['MODULE']->value)){?><span class="fa fa-check icon action markAsHeld" title="<?php echo vtranslate('LBL_MARK_AS_HELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="Calendar_Calendar_Js.markAsHeld('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
');"></span><?php }?><?php if ($_smarty_tpl->tpl_vars['IS_CREATE_PERMITTED']->value&&$_smarty_tpl->tpl_vars['EDIT_VIEW_URL']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus')==vtranslate('Held',$_smarty_tpl->tpl_vars['MODULE']->value)){?><span class="fa fa-flag icon action holdFollowupOn" title="<?php echo vtranslate('LBL_HOLD_FOLLOWUP_ON',"Events");?>
" onclick="Calendar_Calendar_Js.holdFollowUp('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
');"></span><?php }?><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value){?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['delete']){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" class="deleteRecordButton"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php }?></ul></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" name="Cancel"><i class="ti-close"></i></button></div></div><?php }} ?>