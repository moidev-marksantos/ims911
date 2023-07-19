<?php /* Smarty version Smarty-3.1.7, created on 2022-01-04 13:02:51
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1581938343619dd6ca11f808-72615183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '261a11abcd572c4666cc14946d5fd2d00ba3293b' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581938343619dd6ca11f808-72615183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619dd6ca120c2',
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619dd6ca120c2')) {function content_619dd6ca120c2($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='ti-close'></span></button></div><h4 class="pull-left"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?>Send Message<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php }?></h4></div></div>    <?php }} ?>