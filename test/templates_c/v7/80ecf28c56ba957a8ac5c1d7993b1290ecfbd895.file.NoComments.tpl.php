<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 08:21:46
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9367994286023979a104e75-16230306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ecf28c56ba957a8ac5c1d7993b1290ecfbd895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\NoComments.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9367994286023979a104e75-16230306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6023979a12889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6023979a12889')) {function content_6023979a12889($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>