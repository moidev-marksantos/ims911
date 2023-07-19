{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
		{if $MODULE eq 'HelpDesk'}
        <div class=" detailview-header-block">
            <div class="detailview-header">
                <div class="row">
                    <div class="col-md-6">
                    <h4 id="ticket_title" name="ticket_title">{$RECORD->get('ticket_no')}</h4>&nbsp;
					<table style="font-size: 15px;">
						<tr>						
							<td>Incident Type</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;{$RECORD->get('ticketcategories')}</td>
						</tr>
						<tr>						
							<td>Status</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;{$RECORD->get('ticketstatus')}</td>
						</tr>
						<tr>						
							<td>Street</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;{$RECORD->get('cf_860')}</td>
						</tr>
						<tr>						
							<td>Landmark</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;{$RECORD->get('cf_862')}</td>
						</tr>
					</table>
                        <!-- <p style="margin-top: -20px;font-weight: bold; font-size: 13px;">Incident Type  : <b>{$RECORD->get('ticketcategories')}</b></p> -->
                        <!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Incident Status: <b id="ticket_status">{$RECORD->get('ticketstatus')}</b></p> -->
                        <!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Street: <b id="ticket_status">{$RECORD->get('cf_860')}</b></p> -->
                        <!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Landmark: <b id="ticket_status">{$RECORD->get('cf_862')}</b></p> -->
                    </div>
                    {include file="DetailViewActions.tpl"|vtemplate_path:$MODULE}
                </div>
            </div>
        {else}
            <div class=" detailview-header-block">
                <div class="detailview-header">
                    <div class="row">
                        {include file="DetailViewHeaderTitle.tpl"|vtemplate_path:$MODULE}
                        {include file="DetailViewActions.tpl"|vtemplate_path:$MODULE}
                    </div>
             </div>
         {/if}