<?php /* Smarty version Smarty-3.1.7, created on 2021-02-08 05:02:33
         compiled from "/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Reports/ModuleHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14794406386020c5e99990c6-71446803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36233d30a727bfb321ebf24c8489b153ec8713e' => 
    array (
      0 => '/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Reports/ModuleHeader.tpl',
      1 => 1611603504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14794406386020c5e99990c6-71446803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_MODEL' => 0,
    'DEFAULT_FILTER_ID' => 0,
    'CVURL' => 0,
    'DEFAULT_FILTER_URL' => 0,
    'VIEW' => 0,
    'REPORT_NAME' => 0,
    'VIEWNAME' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
    'FOLDERNAME' => 0,
    'LISTVIEW_LINKS' => 0,
    'LISTVIEW_BASICACTION' => 0,
    'childLinks' => 0,
    'FIELDS_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6020c5e99b885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6020c5e99b885')) {function content_6020c5e99b885($_smarty_tpl) {?>
<style>

.btnnewmicro{
	margin-top: 0px;
	height: 41px;
	border-top: 0px;
	border-bottom: 0px;
	border-radius: 0px;
	font-weight: normal;
	background-color: #032e61;
	color: #fff;
	text-shadow: none;
	border-color: rgba(255,255,255,.2);
					
}

</style>
<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop" style="padding-left: 0px;"><div class="module-action-content clearfix" style="background-color: #032e61; color: #fff"><span class="col-lg-7 col-md-7" style="background-color: #032e61; color: #fff"><span><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultCustomFilter(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value){?><?php $_smarty_tpl->tpl_vars['CVURL'] = new Smarty_variable(("&viewname=").($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable(($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl()).($_smarty_tpl->tpl_vars['CVURL']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrlWithAllFilter(), null, 0);?><?php }?><a title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL']->value;?>
'><h4 class="module-title pull-left">&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</h4></a></span><span><p class="current-filter-name pull-left">&nbsp;<span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['VIEW']->value=='Detail'||$_smarty_tpl->tpl_vars['VIEW']->value=='ChartDetail'){?><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
<?php }?>&nbsp;</p></span><?php if ($_smarty_tpl->tpl_vars['VIEWNAME']->value){?><?php if ($_smarty_tpl->tpl_vars['VIEWNAME']->value!='All'){?><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->getId()==$_smarty_tpl->tpl_vars['VIEWNAME']->value){?><?php $_smarty_tpl->tpl_vars['FOLDERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FOLDER']->value->getName(), null, 0);?><?php break 1?><?php }?><?php } ?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['FOLDERNAME'] = new Smarty_variable(vtranslate('LBL_ALL_REPORTS',$_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php }?><span><p class="current-filter-name filter-name pull-left"><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['FOLDERNAME']->value;?>
&nbsp;</p></span><?php }?></span><span class="col-lg-5 col-md-5 pull-right" style="background-color: #032e61; color: #fff"><div id="appnav" class="navbar-right"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?><?php $_smarty_tpl->tpl_vars["childLinks"] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getChildLinks(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['childLinks']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->get('linklabel')=='LBL_ADD_RECORD'){?><button class="btnnewmicro" onclick="Reports_List_Js.addReport(&quot;index.php?module=Reports&amp;view=Edit&quot;);"><i class="ti-plus" aria-hidden="true"></i>&nbsp;&nbsp;ADD LIST REPORT</button><button class="btnnewmicro" onclick="Reports_List_Js.addReport(&quot;index.php?module=Reports&amp;view=ChartEdit&quot;);"><i class="ti-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;ADD CHART REPORT</button><?php }?><?php } ?></div></span></div><?php $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_variable(Reports_Field_Model::getListViewFieldsInfo(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value!=null){?><script type="text/javascript">var uimeta = (function () {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;return {field: {get: function (name, property) {if (name && property === undefined) {return fieldInfo[name];}if (name && property) {return fieldInfo[name][property]}},isMandatory: function (name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType: function (name) {if (fieldInfo[name]) {return fieldInfo[name].type}return false;}}};})();</script><?php }?><div class="rssAddFormContainer hide"></div></div><?php }} ?>