<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 06:39:10
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7253607555fd1c28eb18559-20583950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9485b7b6ef496b061cfd0b850e6cabbf1527a3cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\ReminderDetailView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7253607555fd1c28eb18559-20583950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'REMINDER_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd1c28eb1d7d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd1c28eb1d7d')) {function content_5fd1c28eb1d7d($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>