<?php /* Smarty version Smarty-3.1.7, created on 2021-02-08 00:56:38
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21250851725fd01fbec6cff1-33211244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892aba4bdbe22898e6fa6d12bbf83d531b86066e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Header.tpl',
      1 => 1612745794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21250851725fd01fbec6cff1-33211244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd01fbecdda1',
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'QUALIFIED_MODULE' => 0,
    'INVENTORY_MODULES' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'V7_THEME_PATH' => 0,
    'STYLES' => 0,
    'cssModel' => 0,
    'MODULE' => 0,
    'VIEW' => 0,
    'PARENT_MODULE' => 0,
    'NOTIFIER_URL' => 0,
    'EXTENSION_MODULE' => 0,
    'EXTENSION_VIEW' => 0,
    'CURRENT_USER_MODEL' => 0,
    'USER_CURRENCY_SYMBOL' => 0,
    'USER_MODEL' => 0,
    'LANGUAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd01fbecdda1')) {function content_5fd01fbecdda1($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title><?php echo vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</title><link rel="SHORTCUT ICON" href="favicon.png"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/docs.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/font-awesome/css/font-awesome.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/select2/select2.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/select2-bootstrap/select2-bootstrap.css'><link type='text/css' rel='stylesheet' href='libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/vt-icons/style.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/animate/animate.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/daterangepicker/daterangepicker.css'><link type="text/css" rel="stylesheet" href="layouts/microbiz/common.css"><link type='text/css' rel='stylesheet' href='libraries/themify-icons/themify-icons.css'><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- START: ADDED BY MARK : THIS IS FOR MAP--><script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script><link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' /><script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script><link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' /><script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script><link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' /><!-- END: ADDED BY MARK : THIS IS FOR MAP--><input type="hidden" id="inventoryModules" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value);?>
><?php $_smarty_tpl->tpl_vars['V7_THEME_PATH'] = new Smarty_variable(Vtiger_Theme::getv7AppStylePath($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value,".less")!==false){?><link type="text/css" rel="stylesheet/less" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php }else{ ?><link type="text/css" rel="stylesheet" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php }?><?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?><link type="text/css" rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['cssModel']->value->getHref());?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" /><?php } ?><style type="text/css">@media print {.noprint { display:none; }}</style><script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script><script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery.min.js');?>
"></script><script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.0.0.js');?>
"></script><script type="text/javascript">var _META = { 'module': "<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
", 'parent': "<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
", 'notifier':"<?php echo $_smarty_tpl->tpl_vars['NOTIFIER_URL']->value;?>
", 'app':"<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" };<?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value){?>var _EXTENSIONMETA = { 'module': "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_VIEW']->value;?>
"};<?php }?>var _USERMETA;<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value){?>_USERMETA =  { 'id' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
", 'menustatus' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide');?>
",'currency' : "<?php echo $_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value;?>
", 'currencySymbolPlacement' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
",'currencyGroupingPattern' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_pattern');?>
", 'truncateTrailingZeros' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('truncate_trailing_zeros');?>
"};<?php }?></script><?php if (vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)!='Nueva Vizcaya'){?><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('roleid')=='H3'){?><script>setInterval(function(){getnotification();}, 3000);var x = document.getElementById("myAudio");function playAudio() {x.play();}function getnotification(){$.get("/nuevaviscaya/api/notification/checkcounter.php", function(data, status){if(data == '1'){$.get("/nuevaviscaya/api/notification/get.php", function(data, status){playAudio();swal({title: "Incident Alert!",text: "Please check the list for more info.",icon: "warning",buttons: "Go to list >>",dangerMode: true,}).then((yes) => {if (yes) {$.get("/nuevaviscaya/api/notification/updatecounter.php", function(data, status){window.location.href = "index.php?module=HelpDesk&view=List&viewname=13&search_params=[[[%22ticketstatus%22,%22e%22,%22Open%22]]]&nolistcache=1";});}});});}});}</script><?php }?><?php }?><link type="text/css" rel="stylesheet" href="layouts/v7/skins/vtiger/style.css"></head><?php $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL'] = new Smarty_variable(Users_Record_Model::getCurrentUserModel(), null, 0);?><body data-skinpath="<?php echo Vtiger_Theme::getBaseThemePath();?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" data-user-decimalseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_decimal_separator');?>
" data-user-dateformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format');?>
"data-user-groupingseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_separator');?>
" data-user-numberofdecimals="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('no_of_currency_decimals');?>
" data-user-hourformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('hour_format');?>
"data-user-calendar-reminder-interval="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getCurrentUserActivityReminderInSeconds();?>
"><input type="hidden" id="start_day" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('dayoftheweek');?>
" /><div id="page"><div id="pjaxContainer" class="hide noprint"></div><div id="messageBar" class="hide"></div><div style="margin-top: 20px;"></div><?php }} ?>