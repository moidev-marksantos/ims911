<?php /* Smarty version Smarty-3.1.7, created on 2020-12-11 06:35:54
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249869185fd3134a78c317-73254663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2492e4b33a250b8c07efb6bb303ab914d89ba6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardWidgetContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249869185fd3134a78c317-73254663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd3134a7910e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd3134a7910e')) {function content_5fd3134a7910e($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11"><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>