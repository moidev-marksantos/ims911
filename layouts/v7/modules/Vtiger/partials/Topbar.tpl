{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

{strip}
    {include file="modules/Vtiger/Header.tpl"}

    {assign var=APP_IMAGE_MAP value=Vtiger_MenuStructure_Model::getAppIcons()}
    
    <nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar">
    <div class="container-fluid global-nav" style="font-family: Arial, Helvetica, sans-serif;font-weight: 550;">
            <div class="col-md-9 app-navigator-container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.php" class="company-logo">
                            <img src="{$COMPANY_LOGO->get('imagepath')}" alt="{$COMPANY_LOGO->get('alt')}" />
                        </a>
                    </div>
                    
                    <div class="col-md-10">
                        <ul class="nav navbar-nav">

                            {assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}

                            <li style="margin-left: 15px;">
                                <a href="{$HOME_MODULE_MODEL->getDefaultUrl()}" style="color: #000;">
                                    <div class="menu-items-wrapper">
                                        <span style="font-size: 20px;" class="ti-dashboard"></span>
                                        <span style="font-size: 15px;" class="textOverflowEllipsis">
                                           &nbsp;DASHBOARD </span>
                                    </div>
                                </a>
                            </li>

                            

                            {assign var=HELPDESK_MODULE_MODEL value=Vtiger_Module_Model::getInstance('HelpDesk')}
                            {if $USER_PRIVILEGES_MODEL->hasModulePermission($HELPDESK_MODULE_MODEL->getId())}

                                <li style="margin-left: 15px;">
                                    <a href="?module=HelpDesk&view=Edit&app=MARKETING" style="color: #000;">
                                        <div class="menu-items-wrapper">
                                            <span style="font-size: 20px;" class="ti-pencil-alt"></span>
                                            <span style="font-size: 15px;" class="textOverflowEllipsis">
                                              &nbsp;NEW INCIDENT</span>
                                        </div>
                                    </a>
                                </li>

                                <li style="margin-left: 15px;">
                                    <a href="?module=HelpDesk&view=List" style="color: #000;">
                                        <div class="menu-items-wrapper">
                                            <span style="font-size: 20px;" class="ti-alert"></span>
                                            <span style="font-size: 15px;" class="textOverflowEllipsis">
                                              &nbsp;INCIDENTS </span>
                                        </div>
                                    </a>
                                </li>
                            {/if}

                            {assign var=CONTACTS_MODULE_MODEL  value=Vtiger_Module_Model::getInstance('Contacts')}
                            {assign var=ACCOUNTS_MODULE_MODEL  value=Vtiger_Module_Model::getInstance('Agency')}
                            {assign var=RESPONDER_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Responder')}

                            <li class="dropdown" style="margin-left: 15px;">
                                <a style="color: #000;" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="menu-items-wrapper">
                                        <span style="font-size: 20px;" class="ti-user"></span>
                                        <span style="font-size: 15px;"
                                            class="textOverflowEllipsis">&nbsp;CONTACTS</span>
                                        <span class="ti-angle-down"></span>
                                    </div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>         
                                        {if $USER_PRIVILEGES_MODEL->hasModulePermission($CONTACTS_MODULE_MODEL->getId())}                               
                                        <a href="?module=Contacts&view=List" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;CONTACTS</span>
                                        </a> 
                                        {/if}
                                        {if $USER_PRIVILEGES_MODEL->hasModulePermission($ACCOUNTS_MODULE_MODEL->getId())}
                                        <a href="?module=Agency&view=List" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;AGENCIES</span>
                                        </a> 
                                        {/if} 
                                        {if $USER_PRIVILEGES_MODEL->hasModulePermission($RESPONDER_MODULE_MODEL->getId())}
                                        <a href="?module=Responder&view=List" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;RESPONDER</span>
                                        </a>   
                                        {/if}  
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown" style="margin-left: 15px;">
                                <a style="color: #000;" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="menu-items-wrapper">
                                        <span style="font-size: 20px;" class="ti-map-alt"></span>
                                        <span style="font-size: 15px;"
                                            class="textOverflowEllipsis">&nbsp;MONITORING</span>
                                        <span class="ti-angle-down"></span>
                                    </div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="?module=Home&view=IncidentMap" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;INCIDENT MAP</span>
                                        </a>   
										
										{if $USER_MODEL->get('roleid') neq 'H11' && 
										    $USER_MODEL->get('roleid') neq 'H10' &&
											$USER_MODEL->get('roleid') neq 'H9'
										}
                                        <a href="?module=Home&view=HeatMap" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;HEAT MAP </span>
                                        </a> 
										{/if}
										
										{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
										{assign var=CALLLOGS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Calllogs')}                    
										{if $USER_PRIVILEGES_MODEL->hasModulePermission($CALLLOGS_MODULE_MODEL->getId())}
										<a href="?module=Calllogs&view=List" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;">
                                            <span class="textOverflowEllipsis">&nbsp;CALL LOGS</span>
                                        </a> 
										{/if}
                                        <!-- <a href="?module=Home&view=FloodMonitoring" style="padding-top: 10px;padding-bottom: 10px;font-weight: 600;"> -->
                                            <!-- <span class="textOverflowEllipsis">&nbsp;FLOOD MONITORING</span> -->
                                        <!-- </a> -->
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div id="navbar" class="col-md-3 collapse navbar-collapse navbar-right global-actions">
                <ul class="nav navbar-nav">

                    {assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
                    {assign var=CALENDAR_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Calendar')}
                    
                    {if $USER_PRIVILEGES_MODEL->hasModulePermission($CALENDAR_MODULE_MODEL->getId())}
                        <li>
                            <div><a style="font-size: 20px;"
                                    href="index.php?module=Calendar&view={$CALENDAR_MODULE_MODEL->getDefaultViewName()}"
                                    class="ti-calendar" title="{vtranslate('Calendar','Calendar')}" aria-hidden="true"></a>
                            </div>
                        </li>
                    {/if}


                    <li class="dropdown">
                        <div>
                            <a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button" style="text-transform: uppercase;"> &nbsp;
                                <span style="font-size: 20px;" class="ti-user" aria-hidden="true" title="{$USER_MODEL->get('first_name')} {$USER_MODEL->get('last_name')} ({$USER_MODEL->get('user_name')})"></span>
                                <span
                                    class="link-text-xs-only hidden-lg hidden-md hidden-sm">{$USER_MODEL->getName()}</span>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a style="padding-top: 5px;padding-bottom: 5px;" href="{$USER_MODEL->getPreferenceDetailViewUrl()}"><span class="ti-info-alt"></span> My Preference</a></li>
                            {assign var=REPORTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Reports')}
                            {if $USER_PRIVILEGES_MODEL->hasModulePermission($REPORTS_MODULE_MODEL->getId())}
                            <li><a style="padding-top: 5px;padding-bottom: 5px;" href="index.php?module=Reports&view=List"><span class="ti-printer"></span> Reports </a></li>
                            {/if}
                            {if $USER_MODEL->isAdminUser()}
                            <li><a style="padding-top: 5px;padding-bottom: 5px;" href="index.php?module=Vtiger&parent=Settings&view=Index"><span class="ti-settings"></span> Settings </a></li>
                            {/if}

                            <li role="separator" class="divider"></li>
                            <li><a style="padding-top: 5px;padding-bottom: 5px;" href="index.php?module=Users&action=Logout"><span class="ti-arrow-left"></span> Sign Out</a></li>
                        </ul>

                        
                        </div>
                    </li>
                    
                    
                    <li style="display: none;">
                            <div class="dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="{vtranslate('LBL_QUICK_CREATE',$MODULE)}" aria-hidden="true"></a>
                                </div>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
                                    <li class="title" style="padding: 5px 0 0 15px;">
                                        <strong>{vtranslate('LBL_QUICK_CREATE',$MODULE)}</strong>
                                    </li>
                                    <hr />
                                    <li id="quickCreateModules" style="padding: 0 5px;">
                                        <div class="col-lg-12" style="padding-bottom:15px;">
                                            {foreach key=moduleName item=moduleModel from=$QUICK_CREATE_MODULES}
                                                {if $moduleModel->isPermitted('CreateView') || $moduleModel->isPermitted('EditView')}
                                                    {assign var='quickCreateModule' value=$moduleModel->isQuickCreateSupported()}
                                                    {assign var='singularLabel' value=$moduleModel->getSingularLabelKey()}
                                                    {assign var=hideDiv value={!$moduleModel->isPermitted('CreateView') && $moduleModel->isPermitted('EditView')}}
                                                    {if $quickCreateModule == '1'}
                                                        {if $count % 3 == 0}
                                                            <div class="row">
                                                            {/if}
                                                            {* Adding two links,Event and Task if module is Calendar *}
                                                            {if $singularLabel == 'SINGLE_Calendar'}
                                                                {assign var='singularLabel' value='LBL_TASK'}
                                                                <div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
                                                                    <a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)">{$moduleModel->getModuleIcon('Event')}<span class="quick-create-module">{vtranslate('LBL_EVENT',$moduleName)}</span></a>
                                                                </div>
                                                                {if $count % 3 == 2}
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                {/if}
                                                                <div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
                                                                    <a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}" data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">{$moduleModel->getModuleIcon('Task')}<span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span></a>
                                                                </div>
                                                                {if !$hideDiv}
                                                                    {assign var='count' value=$count+1}
                                                                {/if}
                                                            {else if $singularLabel == 'SINGLE_Documents'}
                                                                <div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if} dropdown">
                                                                    <a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModuleSubmenu dropdown-toggle" data-name="{$moduleModel->getName()}" data-toggle="dropdown" data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
                                                                        {$moduleModel->getModuleIcon()}
                                                                        <span class="quick-create-module">
                                                                            {vtranslate($singularLabel,$moduleName)}
                                                                            <i class="fa fa-caret-down quickcreateMoreDropdownAction"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_{$moduleModel->getName()}">
                                                                        <li class="dropdown-header"><i class="fa fa-upload"></i> {vtranslate('LBL_FILE_UPLOAD', $moduleName)}</li>
                                                                        <li id="VtigerAction">
                                                                            <a href="javascript:Documents_Index_Js.uploadTo('Vtiger')">
                                                                                <i class="fa fa-upload"></i> {vtranslate('LBL_FILE_UPLOAD', 'Documents')}
                                                                            </a>
                                                                        </li>
                                                                        <li class="dropdown-header"><i class="fa fa-link"></i> {vtranslate('LBL_LINK_EXTERNAL_DOCUMENT', $moduleName)}</li>
                                                                        <li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; {vtranslate('LBL_FROM_SERVICE', $moduleName, {vtranslate('LBL_FILE_URL', $moduleName)})}</a></li>
                                                                        <li role="separator" class="divider"></li>
                                                                        <li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> {vtranslate('LBL_CREATE_NEW', $moduleName, {vtranslate('SINGLE_Documents', $moduleName)})}</a></li>
                                                                    </ul>
                                                                </div>
                                                            {else}
                                                                <div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
                                                                    <a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}" data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
                                                                        {$moduleModel->getModuleIcon()}
                                                                        <span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span>
                                                                    </a>
                                                                </div>
                                                            {/if}
                                                            {if $count % 3 == 2}
                                                            </div>
                                                            <br>
                                                        {/if}
                                                        {if !$hideDiv}
                                                            {assign var='count' value=$count+1}
                                                        {/if}
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                </ul>
            </div>
        </div>
    {/strip}