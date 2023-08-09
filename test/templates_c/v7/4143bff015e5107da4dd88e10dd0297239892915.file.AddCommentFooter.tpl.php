<?php /* Smarty version Smarty-3.1.7, created on 2021-09-09 05:48:01
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\AddCommentFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146920204761399bf20c8b26-17715938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4143bff015e5107da4dd88e10dd0297239892915' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\AddCommentFooter.tpl',
      1 => 1631166477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146920204761399bf20c8b26-17715938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61399bf20cf57',
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'FIELD_MODEL' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61399bf20cf57')) {function content_61399bf20cf57($_smarty_tpl) {?>
<div class="modal-footer"><div class="row-fluid"><div class="col-xs-6"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getProfileReadWritePermission()){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }?></div><div class="col-xs-6"><div><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?>Send<?php }else{ ?><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></strong></button></div></div></div></div><?php }} ?>