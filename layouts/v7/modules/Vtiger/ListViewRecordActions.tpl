{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{strip}
<!--LIST VIEW RECORD ACTIONS-->

<div class="table-actions">
 
    {if $LISTVIEW_ENTRY->get('starred') eq vtranslate('LBL_YES', $MODULE)}
        {assign var=STARRED value=true}
    {else}
        {assign var=STARRED value=false}
    {/if}
    {if $QUICK_PREVIEW_ENABLED eq 'true'}
		<span>
			<a class="quickView ti-eye icon action" data-app="{$SELECTED_MENU_CATEGORY}" title="{vtranslate('LBL_QUICK_VIEW', $MODULE)}"></a>
		</span>
    {/if}
    {if $RECORD_ACTIONS['edit']}
        <span>
            <a class="ti-pencil" href="{$LISTVIEW_ENTRY->getEditViewUrl()}&app={$SELECTED_MENU_CATEGORY}" title="Edit"></a>
        </span>
    {/if} 
    <span>
	    <a class="ti-layout-media-overlay" href="{$LISTVIEW_ENTRY->getFullDetailViewUrl()}&app={$SELECTED_MENU_CATEGORY}" title="Details"></a>
	</span>  
	
    <div class="btn-group inline-save hide">
        <button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button>
        <button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="ti-close"></i></button>
    </div>
</div>
{/strip}
