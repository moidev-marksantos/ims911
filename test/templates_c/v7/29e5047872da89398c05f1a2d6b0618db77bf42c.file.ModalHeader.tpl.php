<?php /* Smarty version Smarty-3.1.7, created on 2023-08-09 19:37:49
         compiled from "/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68954925964d37a8d475a07-46572649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e5047872da89398c05f1a2d6b0618db77bf42c' => 
    array (
      0 => '/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1691578347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68954925964d37a8d475a07-46572649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_64d37a8d477fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64d37a8d477fd')) {function content_64d37a8d477fd($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='ti-close'></span></button></div><h4 class="pull-left"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?>Send Message<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php }?></h4></div></div>    <?php }} ?>