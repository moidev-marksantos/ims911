<?php /* Smarty version Smarty-3.1.7, created on 2021-09-09 05:46:13
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110495223760ee333aa91ab9-71631067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e949b390e1cea5f891b3c0c06c7dda99b0afe02' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModalHeader.tpl',
      1 => 1631166369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110495223760ee333aa91ab9-71631067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee333aac8b1',
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee333aac8b1')) {function content_60ee333aac8b1($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='ti-close'></span></button></div><h4 class="pull-left"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?>Send Message<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php }?></h4></div></div>    <?php }} ?>