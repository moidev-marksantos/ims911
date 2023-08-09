<?php /* Smarty version Smarty-3.1.7, created on 2021-01-21 06:51:57
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\SummaryViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11549398376009248d3c1256-71752053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6094308d5e08e64b7a1e15ab84e19946ddba4c14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\SummaryViewWidgets.tpl',
      1 => 1607482638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11549398376009248d3c1256-71752053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE_SUMMARY' => 0,
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_WIDGET' => 0,
    'RELATED_ACTIVITIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6009248d3fe3e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6009248d3fe3e')) {function content_6009248d3fe3e($_smarty_tpl) {?>
<div class="left-block col-lg-7 col-md-7 col-sm-7"><div class="summaryView"><div class="summaryViewHeader"><h4 class="display-inline-block"><?php echo vtranslate('LBL_KEY_FIELDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="summaryViewFields"><?php echo $_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value;?>
</div></div><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2==0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h4 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('action')){?><div class="pull-right"><button class="btn addButton btn-default btn-sm createRecord" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('actionURL');?>
"><i class="ti-plus"></i>&nbsp;&nbsp; <?php echo ((vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)).(" ")).($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel());?>
</button></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div><div class="right-block col-lg-7 col-md-7 col-sm-7"><div id="relatedActivities"><?php echo $_smarty_tpl->tpl_vars['RELATED_ACTIVITIES']->value;?>
</div><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2!=0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h4 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('action')){?><div class="pull-right"><button class="btn addButton btn-default btn-sm createRecord" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->get('actionURL');?>
"><i class="ti-plus"></i>&nbsp;&nbsp;<?php echo ((vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)).(" ")).($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel());?>
</button></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div><?php }} ?>