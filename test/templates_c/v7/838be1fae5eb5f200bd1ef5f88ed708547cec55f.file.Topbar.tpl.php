<?php /* Smarty version Smarty-3.1.7, created on 2021-05-24 05:45:47
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Topbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:438461290603eeca01766c3-59055022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838be1fae5eb5f200bd1ef5f88ed708547cec55f' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Topbar.tpl',
      1 => 1621835141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '438461290603eeca01766c3-59055022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_603eeca01a2bc',
  'variables' => 
  array (
    'COMPANY_LOGO' => 0,
    'HOME_MODULE_MODEL' => 0,
    'HELPDESK_MODULE_MODEL' => 0,
    'USER_PRIVILEGES_MODEL' => 0,
    'CONTACTS_MODULE_MODEL' => 0,
    'ACCOUNTS_MODULE_MODEL' => 0,
    'CALENDAR_MODULE_MODEL' => 0,
    'REPORTS_MODULE_MODEL' => 0,
    'USER_MODEL' => 0,
    'IMAGE_DETAILS' => 0,
    'IMAGE_INFO' => 0,
    'MODULE' => 0,
    'QUICK_CREATE_MODULES' => 0,
    'moduleModel' => 0,
    'quickCreateModule' => 0,
    'count' => 0,
    'singularLabel' => 0,
    'hideDiv' => 0,
    'moduleName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603eeca01a2bc')) {function content_603eeca01a2bc($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?><nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar"><div class="container-fluid global-nav"><div class="col-md-9 app-navigator-container"><div class="row"><div class="col-md-2"><a href="index.php" class="company-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
" /></a></div><div class="col-md-10"><ul class="nav navbar-nav"><?php $_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL'] = new Smarty_variable(Users_Privileges_Model::getCurrentUserPrivilegesModel(), null, 0);?><li style="margin-left: 15px;"><a href="<?php echo $_smarty_tpl->tpl_vars['HOME_MODULE_MODEL']->value->getDefaultUrl();?>
" style="color: #000;"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-home"></span><span style="font-size: 15px; font-weight: 600;" class="textOverflowEllipsis">&nbsp;DASHBOARD </span></div></a></li><?php $_smarty_tpl->tpl_vars['HELPDESK_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('HelpDesk'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['HELPDESK_MODULE_MODEL']->value->getId())){?><li style="margin-left: 15px;"><a href="?module=HelpDesk&view=List&viewname=13" style="color: #000;"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-ticket"></span><span style="font-size: 15px; font-weight: 600;" class="textOverflowEllipsis">&nbsp;INCIDENTS </span></div></a></li><?php }?><?php $_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Contacts'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getId())){?><li style="margin-left: 15px;"><a href="?module=Contacts&view=List&viewname=7" style="color: #000;"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-user"></span><span style="font-size: 15px; font-weight: 600;" class="textOverflowEllipsis">&nbsp;CONTACTS </span></div></a></li><?php }?><?php $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Agency'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getId())){?><li style="margin-left: 15px;"><a href="?module=Agency&view=List&viewname=52&app=MARKETING" style="color: #000;"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-ambulance"></span><span style="font-size: 15px; font-weight: 600;" class="textOverflowEllipsis">&nbsp;AGENCIES </span></div></a></li><?php }?><li style="margin-left: 15px;"><a href="?module=Responder&view=List&viewname=53&app=MARKETING" style="color: #000;"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-mobile"></span><span style="font-size: 15px; font-weight: 600;" class="textOverflowEllipsis">&nbsp;RESPONDER </span></div></a></li><li class="dropdown" style="margin-left: 15px;"><a style="color: #000;" href="#" class="dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false"><div class="menu-items-wrapper"><span style="font-size: 20px;" class="fa fa-bar-chart"></span><span style="font-size: 15px; font-weight: 600;"class="textOverflowEllipsis">&nbsp;MONITORING</span><span class="caret"></span></div></a><ul class="dropdown-menu"><li><a href="?module=Home&view=CovidTracker" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;"><span class="textOverflowEllipsis">&nbsp;COVID TRACKER</span></a><a href="?module=Home&view=Map" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;"><span class="textOverflowEllipsis">&nbsp;INCIDENT MAP</span></a></li></ul></li></ul></div></div></div><div id="navbar" class="col-md-3 collapse navbar-collapse navbar-right global-actions"><ul class="nav navbar-nav"><?php $_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL'] = new Smarty_variable(Users_Privileges_Model::getCurrentUserPrivilegesModel(), null, 0);?><?php $_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Calendar'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())){?><li><div><a style="font-size: 20px;"href="index.php?module=Calendar&view=<?php echo $_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getDefaultViewName();?>
"class="ti-calendar" title="<?php echo vtranslate('Calendar','Calendar');?>
" aria-hidden="true"></a></div></li><?php }?><?php $_smarty_tpl->tpl_vars['REPORTS_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Reports'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['REPORTS_MODULE_MODEL']->value->getId())){?><li><div><a style="font-size: 20px;" href="index.php?module=Reports&view=List" class="ti-printer"title="<?php echo vtranslate('Reports','Reports');?>
" aria-hidden="true"></a></div></li><?php }?><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()){?><li><div><a style="font-size: 20px;" href="index.php?module=Vtiger&parent=Settings&view=Index"class="ti-settings" title="Settings" aria-hidden="true"></a></div></li><?php }?><?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())){?><li><div><a style="font-size: 20px;" href="#" class="taskManagement ti-check-box"title="<?php echo vtranslate('Tasks','Vtiger');?>
" aria-hidden="true"></a></div></li><?php }?><li class="dropdown"><div><a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button"><span style="font-size: 20px;" class="fa fa-user" aria-hidden="true" title="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name');?>
(<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
)"></span><spanclass="link-text-xs-only hidden-lg hidden-md hidden-sm"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span></a><div class="dropdown-menu logout-content" role="menu"><div class="row"><div class="col-lg-4 col-sm-4"><div class="profile-img-container"><?php $_smarty_tpl->tpl_vars['IMAGE_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getImageDetails(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value!=''&&$_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0]!=''&&$_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0]['path']==''){?><i class='vicon-vtigeruser' style="font-size:90px"></i><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" width="100px" height="100px"><?php }?><?php } ?><?php }?></div></div><div class="col-lg-8 col-sm-8"><div class="profile-container"><h4><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name');?>
</h4><h5 class="textOverflowEllipsis" title='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
'><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
</h5><p><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getUserRoleName();?>
</p></div></div></div><div id="logout-footer" class="logout-footer clearfix"><hr style="margin: 10px 0 !important"><div class=""><span class="pull-left"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES"href="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getPreferenceDetailViewUrl();?>
"><?php echo vtranslate('LBL_MY_PREFERENCES');?>
</a></span><span class="pull-right"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT"href="index.php?module=Users&action=Logout"><?php echo vtranslate('LBL_SIGN_OUT');?>
</a></span></div></div></div></div></li><li style="display: none;"><div class="dropdown"><div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="<?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" aria-hidden="true"></a></div><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;"><li class="title" style="padding: 5px 0 0 15px;"><strong><?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></li><hr /><li id="quickCreateModules" style="padding: 0 5px;"><div class="col-lg-12" style="padding-bottom:15px;"><?php  $_smarty_tpl->tpl_vars['moduleModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleModel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['QUICK_CREATE_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleModel']->key => $_smarty_tpl->tpl_vars['moduleModel']->value){
$_smarty_tpl->tpl_vars['moduleModel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleModel']->key;
?><?php if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView')||$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')){?><?php $_smarty_tpl->tpl_vars['quickCreateModule'] = new Smarty_variable($_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported(), null, 0);?><?php $_smarty_tpl->tpl_vars['singularLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey(), null, 0);?><?php ob_start();?><?php echo !$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView')&&$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['hideDiv'] = new Smarty_variable($_tmp1, null, 0);?><?php if ($_smarty_tpl->tpl_vars['quickCreateModule']->value=='1'){?><?php if ($_smarty_tpl->tpl_vars['count']->value%3==0){?><div class="row"><?php }?><?php if ($_smarty_tpl->tpl_vars['singularLabel']->value=='SINGLE_Calendar'){?><?php $_smarty_tpl->tpl_vars['singularLabel'] = new Smarty_variable('LBL_TASK', null, 0);?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value){?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php }else{ ?>col-lg-4<?php }?>"><a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Event');?>
<span class="quick-create-module"><?php echo vtranslate('LBL_EVENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php if ($_smarty_tpl->tpl_vars['count']->value%3==2){?></div><br><div class="row"><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value){?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php }else{ ?>col-lg-4<?php }?>"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Task');?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value){?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['singularLabel']->value=='SINGLE_Documents'){?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value){?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php }else{ ?>col-lg-4<?php }?> dropdown"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModuleSubmenu dropdown-toggle" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-toggle="dropdown" data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a><ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"><li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD','Documents');?>
</a></li><li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();?><?php echo vtranslate('LBL_FILE_URL',$_smarty_tpl->tpl_vars['moduleName']->value);?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate('LBL_FROM_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_tmp2);?>
</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> <?php ob_start();?><?php echo vtranslate('SINGLE_Documents',$_smarty_tpl->tpl_vars['moduleName']->value);?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['moduleName']->value,$_tmp3);?>
</a></li></ul></div><?php }else{ ?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value){?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php }else{ ?>col-lg-4<?php }?>"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value%3==2){?></div><br><?php }?><?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value){?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?><?php }?><?php }?><?php }?><?php } ?></div></li></ul></div></li></ul></div></div><?php }} ?>