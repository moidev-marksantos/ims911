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
{strip}
	<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop" style="padding-left: 0px;">
		<div class="module-action-content clearfix" style="background-color: #032e61; color: #fff">
			<span class="col-lg-7 col-md-7" style="background-color: #032e61; color: #fff">
				<span>
					{assign var=MODULE_MODEL value=Vtiger_Module_Model::getInstance($MODULE)}
					{assign var=DEFAULT_FILTER_ID value=$MODULE_MODEL->getDefaultCustomFilter()}
					{if $DEFAULT_FILTER_ID}
						{assign var=CVURL value="&viewname="|cat:$DEFAULT_FILTER_ID}
						{assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getListViewUrl()|cat:$CVURL}
					{else}
						{assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getListViewUrlWithAllFilter()}
					{/if}
					<a title="{vtranslate($MODULE, $MODULE)}" href='{$DEFAULT_FILTER_URL}'><h4 class="module-title pull-left">&nbsp;{vtranslate($MODULE, $MODULE)}&nbsp;</h4></a>
				</span>
				<span>
					<p class="current-filter-name pull-left">
						&nbsp;<span class="fa fa-angle-right" aria-hidden="true"></span>
						&nbsp;
						{if $VIEW eq 'Detail' or $VIEW eq 'ChartDetail'}
							{$REPORT_NAME}
						{else}
							{$VIEW}
						{/if}
						&nbsp;
					</p>
				</span>
				{if $VIEWNAME}
					{if $VIEWNAME neq 'All'}
						{foreach item=FOLDER from=$FOLDERS}
							{if $FOLDER->getId() eq $VIEWNAME}
								{assign var=FOLDERNAME value=$FOLDER->getName()}
								{break}
							{/if}
						{/foreach}
					{else}
						{assign var=FOLDERNAME value=vtranslate('LBL_ALL_REPORTS', $MODULE)}
					{/if}
					<span>
						<p class="current-filter-name filter-name pull-left"><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;{$FOLDERNAME}&nbsp;</p>
					</span>
				{/if}
			</span>

			<span class="col-lg-5 col-md-5 pull-right" style="background-color: #032e61; color: #fff">
			{if $USER_MODEL->isAdminUser() || $USER_MODEL->get('roleid') neq 'H11'}
				<div id="appnav" class="navbar-right">
					{foreach item=LISTVIEW_BASICACTION from=$LISTVIEW_LINKS['LISTVIEWBASIC']}
						{assign var="childLinks" value=$LISTVIEW_BASICACTION->getChildLinks()}
						{if $childLinks && $LISTVIEW_BASICACTION->get('linklabel') == 'LBL_ADD_RECORD'}
							<button class="btnnewmicro" onclick="Reports_List_Js.addReport(&quot;index.php?module=Reports&amp;view=Edit&quot;);">
							<i class="ti-plus" aria-hidden="true"></i>&nbsp;&nbsp;
							ADD LIST REPORT
							</button>
							<button class="btnnewmicro" onclick="Reports_List_Js.addReport(&quot;index.php?module=Reports&amp;view=ChartEdit&quot;);">
							<i class="ti-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;
							ADD CHART REPORT
							</button>
						{/if}
					{/foreach}
				</div>
			{/if}
			</span>
		</div>
		{assign var=FIELDS_INFO value=Reports_Field_Model::getListViewFieldsInfo()}
		{if $FIELDS_INFO neq null}
			<script type="text/javascript">
				var uimeta = (function () {
					var fieldInfo = {$FIELDS_INFO};
					return {
						field: {
							get: function (name, property) {
								if (name && property === undefined) {
									return fieldInfo[name];
								}
								if (name && property) {
									return fieldInfo[name][property]
								}
							},
							isMandatory: function (name) {
								if (fieldInfo[name]) {
									return fieldInfo[name].mandatory;
								}
								return false;
							},
							getType: function (name) {
								if (fieldInfo[name]) {
									return fieldInfo[name].type
								}
								return false;
							}
						}
					};
				})();
			</script>
		{/if}
		<div class="rssAddFormContainer hide">
		</div>
	</div> 
{/strip}