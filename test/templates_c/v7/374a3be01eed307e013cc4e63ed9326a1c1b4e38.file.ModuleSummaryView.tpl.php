<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 03:09:59
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148449816260234e877edb33-15427487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374a3be01eed307e013cc4e63ed9326a1c1b4e38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModuleSummaryView.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148449816260234e877edb33-15427487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'SUMMARY_RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60234e87804e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60234e87804e9')) {function content_60234e87804e9($_smarty_tpl) {?>



<div class="recordDetails">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

</div><?php }} ?>