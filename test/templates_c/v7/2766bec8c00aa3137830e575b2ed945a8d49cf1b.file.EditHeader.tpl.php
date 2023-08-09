<?php /* Smarty version Smarty-3.1.7, created on 2022-01-04 13:38:28
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196249813661a03edf0004a6-75520705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2766bec8c00aa3137830e575b2ed945a8d49cf1b' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/EditHeader.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196249813661a03edf0004a6-75520705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61a03edf06ee7',
  'variables' => 
  array (
    'CREATE' => 0,
    'RECORD_ID' => 0,
    'STEP' => 0,
    'QUALIFIED_MODULE' => 0,
    'BREADCRUMB_LABELS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61a03edf06ee7')) {function content_61a03edf06ee7($_smarty_tpl) {?>

<div class="editViewPageDiv mailBoxEditDiv viewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="hidden" id="create" value="<?php echo $_smarty_tpl->tpl_vars['CREATE']->value;?>
" /><input type="hidden" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="step" value="<?php echo $_smarty_tpl->tpl_vars['STEP']->value;?>
" /><h4><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php echo vtranslate('LBL_ADDING_NEW_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDIT_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></h4><hr><div class="editViewContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS'] = new Smarty_variable(array("step1"=>"MAILBOX_DETAILS","step2"=>"SELECT_FOLDERS"), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php $_smarty_tpl->createLocalArrayVariable('BREADCRUMB_LABELS', null, 0);
$_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value['step3'] = 'ADD_RULES';?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>