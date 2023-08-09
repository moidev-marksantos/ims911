{*
<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
********************************************************************************/
-->*}
{strip}
{if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
        <input type="hidden" name="picklistDependency" value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}' />
{/if}
<style>
.mapboxgl-ctrl-geocoder {
    width: 800px!important;
}
.mapboxgl-ctrl-logo {
	display: none !important;
}
	
.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
	display: none !important;
}
</style>
<div name='editContent'>
    {if $DUPLICATE_RECORDS}
    <div class="fieldBlockContainer duplicationMessageContainer">
        <div class="duplicationMessageHeader"><b>{vtranslate('LBL_DUPLICATES_DETECTED', $MODULE)}</b></div>
        <div>{getDuplicatesPreventionMessage($MODULE, $DUPLICATE_RECORDS)}</div>
    </div>
    {/if}
    {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE name=blockIterator}
    {if $BLOCK_FIELDS|@count gt 0}
    {if $BLOCK_LABEL eq 'Location Details' and $MODULE eq 'HelpDesk'}
    <div class='fieldBlockContainer' data-block="{$BLOCK_LABEL}">
        <h5 class='fieldBlockHeader'>{vtranslate($BLOCK_LABEL, $MODULE)}</h5>
        <hr>
        <table class="table table-borderless">
            <tr>
                {assign var=COUNTER value=0}
                {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                {assign var="isReferenceField" value=$FIELD_MODEL->getFieldDataType()}
                {assign var=FIELD_INFO value=$FIELD_MODEL->getFieldInfo()}
                {assign var="refrenceList" value=$FIELD_MODEL->getReferenceList()}
                {assign var="refrenceListCount" value=count($refrenceList)}
                {if $FIELD_MODEL->isEditable() eq true}
                {if $FIELD_MODEL->get('uitype') eq "19"}
                {if $COUNTER eq '1'}
                <td></td>
                <td></td>
            </tr>
            <tr>
                {assign var=COUNTER value=0}
                {/if}
                {/if}
                {if $COUNTER eq 2}
            </tr>
            <tr>
                {assign var=COUNTER value=1}
                {else}
                {assign var=COUNTER value=$COUNTER+1}
                {/if}
                <td class="fieldLabel alignMiddle">
                    {if $MASS_EDITION_MODE}
                    <input class="inputElement" id="include_in_mass_edit_{$FIELD_MODEL->getFieldName()}" data-update-field="{$FIELD_MODEL->getFieldName()}" type="checkbox">&nbsp;
                    {/if}
                    {if $isReferenceField eq "reference"}
                    {if $refrenceListCount > 1}
                    {assign var="DISPLAYID" value=$FIELD_MODEL->get('fieldvalue')}
                    {assign var="REFERENCED_MODULE_STRUCTURE" value=$FIELD_MODEL->getUITypeModel()->getReferenceModule($DISPLAYID)}
                    {if !empty($REFERENCED_MODULE_STRUCTURE)}
                    {assign var="REFERENCED_MODULE_NAME" value=$REFERENCED_MODULE_STRUCTURE->get('name')}
                    {/if}
                    <select style="width: 140px;" class="select2 referenceModulesList">
                        {foreach key=index item=value from=$refrenceList}
                        <option value="{$value}" {if $value eq $REFERENCED_MODULE_NAME} selected {/if}>{vtranslate($value, $value)}</option>
                        {/foreach}
                    </select>
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else if $FIELD_MODEL->get('uitype') eq "83"}
                    {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE) COUNTER=$COUNTER MODULE=$MODULE}
                    {if $TAXCLASS_DETAILS}
                    {assign 'taxCount' count($TAXCLASS_DETAILS)%2}
                    {if $taxCount eq 0}
                    {if $COUNTER eq 2}
                    {assign var=COUNTER value=1}
                    {else}
                    {assign var=COUNTER value=2}
                    {/if}
                    {/if}
                    {/if}
                    {else}
                    {if $MODULE eq 'Documents' && $FIELD_MODEL->get('label') eq 'File Name'}
                    {assign var=FILE_LOCATION_TYPE_FIELD value=$RECORD_STRUCTURE['LBL_FILE_INFORMATION']['filelocationtype']}
                    {if $FILE_LOCATION_TYPE_FIELD}
                    {if $FILE_LOCATION_TYPE_FIELD->get('fieldvalue') eq 'E'}
                    {vtranslate("LBL_FILE_URL", $MODULE)}&nbsp;<span class="redColor">*</span>
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {/if}
                    &nbsp;{if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}
                </td>
                {if $FIELD_MODEL->get('uitype') neq '83'}
                <td {if in_array($FIELD_MODEL->get('uitype'),array('19','69')) || $FIELD_NAME eq 'description' || (($FIELD_NAME eq 'recurringtype' or $FIELD_NAME eq 'reminder_time') && in_array({$MODULE},array('Events','Calendar')))} class="fieldValue fieldValueWidth80" colspan="3" {assign var=COUNTER value=$COUNTER+1} {elseif $FIELD_MODEL->get('uitype') eq '56'} class="fieldValue checkBoxType" {elseif $isReferenceField eq 'reference' or $isReferenceField eq 'multireference' } class="fieldValue p-t-8" {else}class="fieldValue" {/if}>
                    {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE)}
                </td>
                {/if}
                {/if}
                {/foreach}
                {*If their are odd number of fields in edit then border top is missing so adding the check*}
                {if $COUNTER is odd}
                <td></td>
                <td></td>
                {/if}
            </tr>
        </table>
        <div id="map" style='width:100%;height:250px;margin-top:-20px;'></div>
        {literal}
        <script>
        
            document.getElementById("HelpDesk_editView_fieldName_cf_854").readOnly = true;
            var token = 'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';
            mapboxgl.accessToken = token;

            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11?optimize=true',
                center: [120.28223069987126,14.822317845035712],
                zoom: 15
            });
			
			var theUrl2 = "http://124.105.63.203:8080/api/maps/incidents/streetmap.php";
			var xmlHttp2 = new XMLHttpRequest();
			xmlHttp2.open("GET", theUrl2, false);
			xmlHttp2.send(null);
			var customData = JSON.parse(xmlHttp2.responseText);
		

            map.addControl(new mapboxgl.FullscreenControl(), 'top-left');
            var marker = new mapboxgl.Marker({
                draggable: true
            });

			var geolocation = document.getElementById('HelpDesk_editView_fieldName_cf_854').value.trim();
			if (geolocation != '') {
				var geo1 = geolocation.trim().split(',');
				long = geo1[1];
				lat = geo1[0];
				map.flyTo({
					center: [long, lat]
				});
				marker.setLngLat([long, lat]);
				marker.addTo(map);
				marker.on('dragend', onDragEnd);
			}
			
			function forwardGeocoder(query) {
			const matchingFeatures = [];
			for (const feature of customData.features) {			
				if(feature.properties.title.toLowerCase().includes(query.toLowerCase())) 
				{
					feature['place_name'] = `${feature.properties.title}`;
					feature['text'] = `${feature.properties.title}`;
					feature['center'] = feature.geometry.coordinates;
					feature['place_type'] = feature.properties.street;
					feature['address'] = feature.properties.address;
					matchingFeatures.push(feature);
				}
			}
			return matchingFeatures;
			}

			var geocoder = new MapboxGeocoder({
				accessToken     : mapboxgl.accessToken,	
				localGeocoder   : forwardGeocoder,				
				countries       : "ph",
				postcode 		: 2200,
				placeholder     : "Enter location...",	
                marker          : false                
			});

			map.addControl(geocoder);	

			//$(".mapboxgl-ctrl-geocoder--input").focus();

			geocoder.on('result', function (ev) { 
				console.log(ev);
				document.getElementById('HelpDesk_editView_fieldName_cf_860').value = ev.result.text;
				marker.setLngLat(ev.result.geometry.coordinates);
				marker.addTo(map);				
                var lngLat = marker.getLngLat();				
                searchStreet(lngLat);
                marker.on('dragend', onDragEnd);                    
			});

			map.on('click', addMarker);
			
			function addMarker(ev) {
				marker.setLngLat(ev.lngLat);
				marker.addTo(map);
				var lngLat = marker.getLngLat();
				searchStreet(lngLat);
				marker.on('dragend', onDragEnd);
			}
			
			function onDragEnd() {
				var lngLat = marker.getLngLat();
                searchStreet(lngLat);
			}
			
			function searchStreet(lngLat){
			    document.getElementById('HelpDesk_editView_fieldName_cf_854').value = lngLat.lat + ',' + lngLat.lng;							    
			    // var theUrl = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+ lngLat.lng + "," + lngLat.lat +".json?types=poi&access_token=" + token;
			    // var xmlHttp = new XMLHttpRequest();
				// xmlHttp.open("GET", theUrl, false);
				// xmlHttp.send(null);
				// var result = JSON.parse(xmlHttp.responseText);	
                // var streetname = "";             
				
				//document.getElementById('HelpDesk_editView_fieldName_cf_860').value = streetname; //STREET NAME				
			    //document.getElementById('HelpDesk_editView_fieldName_cf_862').value = result.features[0].text; //NEAREST LANDMARK
			    
			}
			
        </script>
        {/literal}
    </div>
    {else}
    <div class='fieldBlockContainer' data-block="{$BLOCK_LABEL}">
        <h5 class='fieldBlockHeader'>{vtranslate($BLOCK_LABEL, $MODULE)}</h5>
        <hr>
        <table class="table table-borderless">
            <tr>
                {assign var=COUNTER value=0}
                {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                {assign var="isReferenceField" value=$FIELD_MODEL->getFieldDataType()}
                {assign var=FIELD_INFO value=$FIELD_MODEL->getFieldInfo()}
                {assign var="refrenceList" value=$FIELD_MODEL->getReferenceList()}
                {assign var="refrenceListCount" value=count($refrenceList)}
                {if $FIELD_MODEL->isEditable() eq true}
                {if $FIELD_MODEL->get('uitype') eq "19"}
                {if $COUNTER eq '1'}
                <td></td>
                <td></td>
            </tr>
            <tr>
                {assign var=COUNTER value=0}
                {/if}
                {/if}
                {if $COUNTER eq 2}
            </tr>
            <tr>
                {assign var=COUNTER value=1}
                {else}
                {assign var=COUNTER value=$COUNTER+1}
				{/if}

                {if $MODULE eq 'HelpDesk' && $FIELD_MODEL->get('label') eq 'Contact Name'}
                    
				{/if}
				
                <td id="{$FIELD_MODEL->get('label')|replace:' ':'_'}1" class="fieldLabel alignMiddle">
                    {if $MASS_EDITION_MODE}
                    <input class="inputElement" id="include_in_mass_edit_{$FIELD_MODEL->getFieldName()}" data-update-field="{$FIELD_MODEL->getFieldName()}" type="checkbox">&nbsp;
                    {/if}
                    {if $isReferenceField eq "reference"}
                    {if $refrenceListCount > 1}
                    {assign var="DISPLAYID" value=$FIELD_MODEL->get('fieldvalue')}
                    {assign var="REFERENCED_MODULE_STRUCTURE" value=$FIELD_MODEL->getUITypeModel()->getReferenceModule($DISPLAYID)}
                    {if !empty($REFERENCED_MODULE_STRUCTURE)}
                    {assign var="REFERENCED_MODULE_NAME" value=$REFERENCED_MODULE_STRUCTURE->get('name')}
                    {/if}
                    <select style="width: 140px;" class="select2 referenceModulesList">
                        {foreach key=index item=value from=$refrenceList}
                        <option value="{$value}" {if $value eq $REFERENCED_MODULE_NAME} selected {/if}>{vtranslate($value, $value)}</option>
                        {/foreach}
                    </select>
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else if $FIELD_MODEL->get('uitype') eq "83"}
                    {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE) COUNTER=$COUNTER MODULE=$MODULE}
                    {if $TAXCLASS_DETAILS}
                    {assign 'taxCount' count($TAXCLASS_DETAILS)%2}
                    {if $taxCount eq 0}
                    {if $COUNTER eq 2}
                    {assign var=COUNTER value=1}
                    {else}
                    {assign var=COUNTER value=2}
                    {/if}
                    {/if}
                    {/if}
                    {else}
                    {if $MODULE eq 'Documents' && $FIELD_MODEL->get('label') eq 'File Name'}
                    {assign var=FILE_LOCATION_TYPE_FIELD value=$RECORD_STRUCTURE['LBL_FILE_INFORMATION']['filelocationtype']}
                    {if $FILE_LOCATION_TYPE_FIELD}
                    {if $FILE_LOCATION_TYPE_FIELD->get('fieldvalue') eq 'E'}
                    {vtranslate("LBL_FILE_URL", $MODULE)}&nbsp;<span class="redColor">*</span>
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {else}
                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                    {/if}
                    {/if}
                    &nbsp;{if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}
                </td>
                {if $FIELD_MODEL->get('uitype') neq '83'}
                <td id="{$FIELD_MODEL->get('label')|replace:' ':'_'}2" {if in_array($FIELD_MODEL->get('uitype'),array('19','69')) || $FIELD_NAME eq 'description' || (($FIELD_NAME eq 'recurringtype' or $FIELD_NAME eq 'reminder_time') && in_array({$MODULE},array('Events','Calendar')))} class="fieldValue fieldValueWidth80" colspan="3" {assign var=COUNTER value=$COUNTER+1} {elseif $FIELD_MODEL->get('uitype') eq '56'} class="fieldValue checkBoxType" {elseif $isReferenceField eq 'reference' or $isReferenceField eq 'multireference' } class="fieldValue p-t-8" {else}class="fieldValue" {/if}>
                    {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE)}
				</td>
				
                {/if}
                {/if}
                {/foreach}
                {*If their are odd number of fields in edit then border top is missing so adding the check*}
                {if $COUNTER is odd}
                <td></td>
                <td></td>
                {/if}
            </tr>
        </table>
    </div>
    {/if}
    {/if}
    {/foreach}
</div>

{if $MODULE eq 'HelpDesk'}
{literal}
	<script>
  
        document.getElementById("SLA_Status1").style.display = "none";
        document.getElementById("SLA_Status2").style.display = "none";
        document.getElementById("SLA_(Hours)1").style.display = "none";
        document.getElementById("SLA_(Hours)2").style.display = "none";

        document.getElementById("Contact_Name1").style.display = "none";
		document.getElementById("Contact_Name2").style.display = "none";
		var contactno = document.getElementById('HelpDesk_editView_fieldName_cf_864').value.trim();
		if(contactno != ""){
			//document.getElementById("First_Name1").style.display = "none";
			//document.getElementById("First_Name2").style.display = "none";

			//document.getElementById("Last_Name1").style.display = "none";
			//document.getElementById("Last_Name2").style.display = "none";

			//document.getElementById("Contact_Name1").style.display = "none";
			//document.getElementById("Contact_Name2").style.display = "none";
		}
		else{
		    //document.getElementById("First_Name1").style.display = "none";
			//document.getElementById("First_Name2").style.display = "none";

			//document.getElementById("Last_Name1").style.display = "none";
			//document.getElementById("Last_Name2").style.display = "none";
			
			//document.getElementById("Contact_No1").style.display = "none";
			//document.getElementById("Contact_No2").style.display = "none";
		}
        
	</script>
{/literal}
{/if}
{/strip}