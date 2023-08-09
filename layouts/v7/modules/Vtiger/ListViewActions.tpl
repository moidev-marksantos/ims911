{*<!--
/*+***********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************/
-->*}

{strip}
    {assign var=LISTVIEW_MASSACTIONS_1 value=array()}
    <div id="listview-actions" class="listview-actions-container">
        {foreach item=LIST_MASSACTION from=$LISTVIEW_MASSACTIONS name=massActions}
            {if $LIST_MASSACTION->getLabel() eq 'LBL_EDIT'}
                {assign var=editAction value=$LIST_MASSACTION}
            {else if $LIST_MASSACTION->getLabel() eq 'LBL_DELETE'}
                {assign var=deleteAction value=$LIST_MASSACTION}
            {else if $LIST_MASSACTION->getLabel() eq 'LBL_ADD_COMMENT'}
                {assign var=commentAction value=$LIST_MASSACTION}
            {else}
                {$a = array_push($LISTVIEW_MASSACTIONS_1, $LIST_MASSACTION)}
                {* $a is added as its print the index of the array, need to find a way around it *}
            {/if}
        {/foreach}
        <div class = "row">
            <div class=" col-md-3">
            <div class="btn-group listViewActionsContainer" role="group" aria-label="...">
                {if $editAction}
                    <button type="button" class="btn btn-success" id={$MODULE}_listView_massAction_{$editAction->getLabel()} 
                            {if stripos($editAction->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$editAction->getUrl()|substr:strlen("javascript:")}'{else} href='{$editAction->getUrl()}' {/if} title="{vtranslate('LBL_EDIT', $MODULE)}" disabled="disabled">
                        <i class="ti-pencil"></i>
                    </button>
                {/if}
                {if $deleteAction}
                    <button type="button" class="btn btn-danger" id={$MODULE}_listView_massAction_{$deleteAction->getLabel()} 
                            {if stripos($deleteAction->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$deleteAction->getUrl()|substr:strlen("javascript:")}'{else} href='{$deleteAction->getUrl()}' {/if} title="{vtranslate('LBL_DELETE', $MODULE)}" disabled="disabled">
                        <i class="ti-trash"></i>
                    </button>
                {/if}

                {if $commentAction}
                    <button type="button" class="btn btn-info" id="{$MODULE}_listView_massAction_{$commentAction->getLabel()}" 
                onclick="Vtiger_List_Js.triggerMassAction('{$commentAction->getUrl()}')" title="{if $MODULE eq 'Responder'}Send Message{else}{vtranslate('LBL_COMMENT', $MODULE)}{/if}" disabled="disabled">
                {if $MODULE eq 'Responder'}<i class="ti-announcement"></i>{else}<i class="ti-comment-alt"></i>{/if}
                    </button>
                {/if}

                {* {if $MODULE eq 'Responder'}
                    <button type="button" class="btn btn-info" id="{$MODULE}_listView_massAction_sendMessage" 
                            onclick="#" title="Send Message" disabled="disabled">
                        <i class="ti-comment-alt"></i>
                    </button>
                {/if} *}

                

                {if count($LISTVIEW_MASSACTIONS_1) gt 0 or $LISTVIEW_LINKS['LISTVIEW']|@count gt 0}
                    <div class="btn-group listViewMassActions" role="group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            {vtranslate('LBL_MORE','Vtiger')}&nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            {foreach item=LISTVIEW_MASSACTION from=$LISTVIEW_MASSACTIONS_1 name=advancedMassActions}
                                <li class="hide"><a id="{$MODULE}_listView_massAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($LISTVIEW_MASSACTION->getLabel())}" {if stripos($LISTVIEW_MASSACTION->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$LISTVIEW_MASSACTION->getUrl()|substr:strlen("javascript:")};'{else} href='{$LISTVIEW_MASSACTION->getUrl()}' {/if}>{vtranslate($LISTVIEW_MASSACTION->getLabel(), $MODULE)}</a></li>
                            {/foreach}
                            {if count($LISTVIEW_MASSACTIONS_1) gt 0 and $LISTVIEW_LINKS['LISTVIEW']|@count gt 0}
                                <li class="divider hide"></li>
                            {/if}                            
                            
                            {assign var=FIND_DUPLICATES_EXITS value=false}
                            {foreach item=LISTVIEW_ADVANCEDACTIONS from=$LISTVIEW_LINKS['LISTVIEW']}
                                {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'Print'}
                                    {assign var=PRINT_TEMPLATE value=$LISTVIEW_ADVANCEDACTIONS}
                                {else}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_FIND_DUPLICATES'}
                                        {assign var=FIND_DUPLICATES_EXISTS value=true}
                                    {/if}
                                {/if}
                            {/foreach}
                            
                            {if $PRINT_TEMPLATE}
                                <li class="hide"><a id="{$MODULE}_listView_advancedAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($PRINT_TEMPLATE->getLabel())}" {if stripos($PRINT_TEMPLATE->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$PRINT_TEMPLATE->getUrl()|substr:strlen("javascript:")};'{else} href='{$PRINT_TEMPLATE->getUrl()}' {/if}>{vtranslate($PRINT_TEMPLATE->getLabel(), $MODULE)}</a></li>
                            {/if}
                            {if $FIND_DUPLICATES_EXISTS}
                                <li class="hide"><a id="{$MODULE}_listView_advancedAction_MERGE_RECORD"  href="javascript:void(0);" onclick='Vtiger_List_Js.triggerMergeRecord()'>{vtranslate('LBL_MERGE_SELECTED_RECORDS', $MODULE)}</a></li>
                            {/if}
                            {foreach item=LISTVIEW_ADVANCEDACTIONS from=$LISTVIEW_LINKS['LISTVIEW']}
                                {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_IMPORT'}
                                {*Remove Import Action*}  
                                {elseif $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'Print'}
                                    {assign var=PRINT_TEMPLATE value=$LISTVIEW_ADVANCEDACTIONS}
                                {else}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_FIND_DUPLICATES'}
                                        {assign var=FIND_DUPLICATES_EXISTS value=true}
                                    {/if}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() != 'Print'}
                                        <li class="selectFreeRecords"><a id="{$MODULE}_listView_advancedAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($LISTVIEW_ADVANCEDACTIONS->getLabel())}" {if stripos($LISTVIEW_ADVANCEDACTIONS->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$LISTVIEW_ADVANCEDACTIONS->getUrl()|substr:strlen("javascript:")};'{else} href='{$LISTVIEW_ADVANCEDACTIONS->getUrl()}' {/if}>{vtranslate($LISTVIEW_ADVANCEDACTIONS->getLabel(), $MODULE)}</a></li>
                                    {/if}  
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                {/if}
            </div>
            </div>

            <div class='col-md-6'>
                {* <div class="btn-group listViewMassActions" role="group" style="width: 100%;">
                    <button style="width: 100%;" type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">
                    List | Current: All
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" style="width: 100%;">
                        <li><a>New List</a></li>
                    </ul>
                </div> *}
            </div>
            <div class="col-md-3">
                {assign var=RECORD_COUNT value=$LISTVIEW_ENTRIES_COUNT}
                {include file="Pagination.tpl"|vtemplate_path:$MODULE SHOWPAGEJUMP=true}
            </div>

            <div class="col-md-12">
            <div class="hide messageContainer" style = "height:30px;">
                    <center><a href="#" id="selectAllMsgDiv">{vtranslate('LBL_SELECT_ALL',$MODULE)}&nbsp;{vtranslate($MODULE ,$MODULE)}&nbsp;(<span id="totalRecordsCount" value=""></span>)</a></center>
                </div>
                <div class="hide messageContainer" style = "height:30px;">
                    <center><a href="#" id="deSelectAllMsgDiv">{vtranslate('LBL_DESELECT_ALL_RECORDS',$MODULE)}</a></center>
                </div>
            </div>
        </div>	
     </div>
{/strip}
