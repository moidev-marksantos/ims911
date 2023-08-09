<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 05:27:01
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Vtiger\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52856387460b473a556fef9-90845649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '782a0b3ac9669608273e47706af6396de1d791b9' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModuleSummaryView.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52856387460b473a556fef9-90845649',
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
  'unifunc' => 'content_60b473a563a45',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b473a563a45')) {function content_60b473a563a45($_smarty_tpl) {?>



<div class="recordDetails">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

</div><?php }} ?>