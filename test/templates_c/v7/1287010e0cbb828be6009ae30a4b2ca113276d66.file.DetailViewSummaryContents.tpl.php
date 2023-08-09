<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 08:21:44
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Accounts\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211512230360239798dcb2a9-43113882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1287010e0cbb828be6009ae30a4b2ca113276d66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Accounts\\DetailViewSummaryContents.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211512230360239798dcb2a9-43113882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60239798dcdbf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60239798dcdbf')) {function content_60239798dcdbf($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>