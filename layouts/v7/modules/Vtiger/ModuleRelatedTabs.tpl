{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
    <div class='related-tabs row'>
        <nav class="navbar margin0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle btn-group-justified collapsed border0" data-toggle="collapse" data-target="#nav-tabs" aria-expanded="false">
                    <i class="fa fa-ellipsis-h"></i>
                </button>
            </div>
    
            <div class="collapse navbar-collapse" id="nav-tabs">
                <ul class="nav nav-tabs">
                    {foreach item=RELATED_LINK from=$DETAILVIEW_LINKS['DETAILVIEWTAB']}
                        {assign var=RELATEDLINK_URL value=$RELATED_LINK->getUrl()}
                        {assign var=RELATEDLINK_LABEL value=$RELATED_LINK->getLabel()}
                        {assign var=RELATED_TAB_LABEL value={vtranslate('SINGLE_'|cat:$MODULE_NAME, $MODULE_NAME)}|cat:" "|cat:$RELATEDLINK_LABEL}
                        <li class="tab-item {if $RELATED_TAB_LABEL==$SELECTED_TAB_LABEL}active{/if}" data-url="{$RELATEDLINK_URL}&tab_label={$RELATED_TAB_LABEL}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATEDLINK_LABEL}" data-link-key="{$RELATED_LINK->get('linkKey')}">
                            <a href="{$RELATEDLINK_URL}&tab_label={$RELATEDLINK_LABEL}&app={$SELECTED_MENU_CATEGORY}" class="textOverflowEllipsis">
                                <span class="tab-label"><strong>{vtranslate($RELATEDLINK_LABEL,{$MODULE_NAME})}</strong></span>
                            </a>
                        </li>
                    {/foreach}
    
                    {assign var=RELATEDTABS value=$DETAILVIEW_LINKS['DETAILVIEWRELATED']}
                    {if !empty($RELATEDTABS)}
                        {assign var=COUNT value=$RELATEDTABS|@count}
        
                        {assign var=LIMIT value = 10}
                        {if $COUNT gt 10}
                            {assign var=COUNT1 value = $LIMIT}
                        {else}
                            {assign var=COUNT1 value=$COUNT}
                        {/if}
        
                        {for $i = 0 to $COUNT1-1}
                            {assign var=RELATED_LINK value=$RELATEDTABS[$i]}
                            {assign var=RELATEDMODULENAME value=$RELATED_LINK->getRelatedModuleName()}
                            {assign var=RELATEDFIELDNAME value=$RELATED_LINK->get('linkFieldName')}
                            {assign var="DETAILVIEWRELATEDLINKLBL" value= vtranslate($RELATED_LINK->getLabel(),$RELATEDMODULENAME)}
                            <li class="tab-item {if (trim($RELATED_LINK->getLabel())== trim($SELECTED_TAB_LABEL)) && ($RELATED_LINK->getId() == $SELECTED_RELATION_ID)}active{/if}" data-url="{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATED_LINK->getLabel()}" data-module="{$RELATEDMODULENAME}" data-relation-id="{$RELATED_LINK->getId()}" {if $RELATEDMODULENAME eq "ModComments" } title {else} title="{$DETAILVIEWRELATEDLINKLBL}" {/if} {if $RELATEDFIELDNAME}data-relatedfield="{$RELATEDFIELDNAME}" {/if}>
                                <a href="index.php?{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" class="textOverflowEllipsis" displaylabel="{$DETAILVIEWRELATEDLINKLBL}" recordsCount="">
                                    {if $RELATEDMODULENAME eq "ModComments"}
                                        <span class="tab-label"><strong>Comments</strong></span> 
                                    {elseif $RELATEDMODULENAME eq "Documents"}
                                        <span class="tab-label"><strong>Media</strong></span> 
                                    {else}
                                        <span class="tab-label"><strong>{$RELATED_LINK->getLabel()}</strong></span>                                       
                                    {/if}
                                </a>
                            </li>
                            {if ($RELATED_LINK->getId() == {$smarty.request.relationId})}
                                {assign var=MORE_TAB_ACTIVE value='true'}
                            {/if}
                        {/for}
                    {/if}
                </ul>
            </div>
        </nav>
    </div>
    {strip}