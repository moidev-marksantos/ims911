<?php /* Smarty version Smarty-3.1.7, created on 2023-08-09 19:36:39
         compiled from "/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Reports/dashboards/DashBoardWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197432355564d37a472359b3-62275177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f5f592a7c5727a6cea0fb5e5a0b7468736bf99' => 
    array (
      0 => '/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Reports/dashboards/DashBoardWidget.tpl',
      1 => 1691578347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197432355564d37a472359b3-62275177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_64d37a4723f26',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64d37a4723f26')) {function content_64d37a4723f26($_smarty_tpl) {?>
<div class="dashboardWidgetHeader">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>