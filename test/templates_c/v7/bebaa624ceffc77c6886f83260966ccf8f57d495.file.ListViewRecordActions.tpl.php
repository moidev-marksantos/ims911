<?php /* Smarty version Smarty-3.1.7, created on 2021-06-28 01:28:16
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Documents\ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69322628660d925b02767f2-68273240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebaa624ceffc77c6886f83260966ccf8f57d495' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Documents\\ListViewRecordActions.tpl',
      1 => 1607677444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69322628660d925b02767f2-68273240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEARCH_MODE_RESULTS' => 0,
    'LISTVIEW_ENTRY' => 0,
    'MODULE' => 0,
    'MODULE_MODEL' => 0,
    'RECORD_ACTIONS' => 0,
    'RECORD_ID' => 0,
    'DOCUMENT_RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60d925b02d6a3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d925b02d6a3')) {function content_60d925b02d6a3($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)){?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()){?><?php }?><span class="more dropdown action"><span class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value){?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['delete']){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" class="deleteRecordButton"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars["DOCUMENT_RECORD_MODEL"] = new Smarty_variable(Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD_ID']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filestatus')){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" name="viewfile" href="javascript:void(0)" data-filelocationtype="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filelocationtype');?>
" data-filename="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename');?>
" onclick="Vtiger_Header_Js.previewFile(event)">File Preview</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filestatus')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filelocationtype')=='I'){?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" name="downloadfile" href="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->getDownloadFileURL();?>
">Download</a></li><?php }?></ul></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" name="Cancel"><i class="ti-close"></i></button></div></div>
<?php }} ?>