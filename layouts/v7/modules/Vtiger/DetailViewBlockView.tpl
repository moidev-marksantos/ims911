{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
	{if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
		<input type="hidden" name="picklistDependency" value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}' />
	{/if}

	{foreach key=BLOCK_LABEL_KEY item=FIELD_MODEL_LIST from=$RECORD_STRUCTURE}
		{assign var=BLOCK value=$BLOCK_LIST[$BLOCK_LABEL_KEY]}
		{if $BLOCK eq null or $FIELD_MODEL_LIST|@count lte 0}{continue}{/if}
			{if $BLOCK_LABEL_KEY eq 'Location Details' and $MODULE eq 'HelpDesk'}

				<div class="block block_{$BLOCK_LABEL_KEY}" data-block="{$BLOCK_LABEL_KEY}"
					data-blockid="{$BLOCK_LIST[$BLOCK_LABEL_KEY]->get('id')}">
					{assign var=IS_HIDDEN value=$BLOCK->isHidden()}
					{assign var=WIDTHTYPE value=$USER_MODEL->get('rowheight')}
					<input type=hidden name="timeFormatOptions" data-value='{$DAY_STARTS}' />
					<div>
						<h5 class="textOverflowEllipsis maxWidth50">
							{vtranslate({$BLOCK_LABEL_KEY},{$MODULE_NAME})}
						</h5>
					</div>
					<hr>
					<div class="blockData">
						<table class="table detailview-table no-border">
							<tbody {if $IS_HIDDEN} class="hide" {/if}> {assign var=COUNTER value=0} <tr>
								{foreach item=FIELD_MODEL key=FIELD_NAME from=$FIELD_MODEL_LIST}
								{assign var=fieldDataType value=$FIELD_MODEL->getFieldDataType()}
								{if !$FIELD_MODEL->isViewableInDetailView()}
								{continue}
								{/if}
								{if $FIELD_MODEL->get('uitype') eq "83"}
								{foreach item=tax key=count from=$TAXCLASS_DETAILS}
								{if $COUNTER eq 2}
								</tr>
								<tr>
									{assign var="COUNTER" value=1}
									{else}
									{assign var="COUNTER" value=$COUNTER+1}
									{/if}
									<td class="fieldLabel {$WIDTHTYPE}">
										<span class='muted'>{vtranslate($tax.taxlabel, $MODULE)}(%)</span>
									</td>
									<td class="fieldValue {$WIDTHTYPE}">
										<span class="value textOverflowEllipsis" data-field-type="{$FIELD_MODEL->getFieldDataType()}">
											{if $tax.check_value eq 1}
											{$tax.percentage}
											{else}
											0
											{/if}
										</span>
									</td>
									{/foreach}
									{else if $FIELD_MODEL->get('uitype') eq "69" || $FIELD_MODEL->get('uitype') eq "105"}
									{if $COUNTER neq 0}
									{if $COUNTER eq 2}
								</tr>
								<tr>
									{assign var=COUNTER value=0}
									{/if}
									{/if}
									<td class="fieldLabel {$WIDTHTYPE}"><span
											class="muted">{vtranslate({$FIELD_MODEL->get('label')},{$MODULE_NAME})}</span></td>
									<td class="fieldValue {$WIDTHTYPE}">
										<ul id="imageContainer">
											{foreach key=ITER item=IMAGE_INFO from=$IMAGE_DETAILS}
											{if !empty($IMAGE_INFO.path) && !empty({$IMAGE_INFO.orgname})}
											<li><img src="{$IMAGE_INFO.path}_{$IMAGE_INFO.orgname}" title="{$IMAGE_INFO.orgname}"
													width="400" height="300" /></li>
											{/if}
											{/foreach}
										</ul>
									</td>
									{assign var=COUNTER value=$COUNTER+1}
									{else}
									{if $FIELD_MODEL->get('uitype') eq "20" or $FIELD_MODEL->get('uitype') eq "19" or $fieldDataType eq
									'reminder' or $fieldDataType eq 'recurrence'}
									{if $COUNTER eq '1'}
									<td class="fieldLabel {$WIDTHTYPE}"></td>
									<td class="{$WIDTHTYPE}"></td>
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
									<td class="fieldLabel textOverflowEllipsis {$WIDTHTYPE}"
										id="{$MODULE_NAME}_detailView_fieldLabel_{$FIELD_MODEL->getName()}" {if $FIELD_MODEL->getName()
										eq 'description' or $FIELD_MODEL->get('uitype') eq '69'} style='width:8%'{/if}>
										<span class="muted">
											{if $MODULE_NAME eq 'Documents' && $FIELD_MODEL->get('label') eq "File Name" &&
											$RECORD->get('filelocationtype') eq 'E'}
											{vtranslate("LBL_FILE_URL",{$MODULE_NAME})}
											{else}
											{vtranslate({$FIELD_MODEL->get('label')},{$MODULE_NAME})}
											{/if}
											{if ($FIELD_MODEL->get('uitype') eq '72') && ($FIELD_MODEL->getName() eq 'unit_price')}
											({$BASE_CURRENCY_SYMBOL})
											{/if}
										</span>
									</td>
									<td class="fieldValue {$WIDTHTYPE}"
										 {if $FIELD_MODEL->
										get('uitype') eq '19' or $fieldDataType eq 'reminder' or $fieldDataType eq 'recurrence'}
										colspan="3" {assign var=COUNTER value=$COUNTER+1} {/if}>
										{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
										{if $fieldDataType eq 'multipicklist'}
										{assign var=FIELD_DISPLAY_VALUE
										value=$FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue'))}
										{else}
										{assign var=FIELD_DISPLAY_VALUE
										value=Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}
										{/if}
				
										<span id="{if $FIELD_MODEL->get('label') eq 'Coordinates'}geolocation{else}{$MODULE_NAME}_detailView_fieldValue_{$FIELD_MODEL->getName()}{/if}" class="value"
											data-field-type="{$FIELD_MODEL->getFieldDataType()}" {if $FIELD_MODEL->get('uitype') eq '19'
											or $FIELD_MODEL->get('uitype') eq '21'} style="white-space:normal;" {/if}>
											{include
											file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName(),$MODULE_NAME)
											FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
										</span>
										{if $IS_AJAX_ENABLED && $FIELD_MODEL->isEditable() eq 'true' && $FIELD_MODEL->isAjaxEditable()
										eq 'true'}
										<span class="hide edit pull-left">
											{if $fieldDataType eq 'multipicklist'}
											<input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get(' name')}[]'
												data-type="{$fieldDataType}" data-displayvalue='{$FIELD_DISPLAY_VALUE}'
												data-value="{$FIELD_VALUE}" />
											{else}
											<input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get(' name')}'
												data-type="{$fieldDataType}" data-displayvalue='{$FIELD_DISPLAY_VALUE}'
												data-value="{$FIELD_VALUE}" />
											{/if}
										</span>
										<span class="action pull-right"><a href="#" onclick="return false;"
												class="editAction fa fa-pencil"></a></span>
										{/if}
									</td>
									{/if}
				
									{if $FIELD_MODEL_LIST|@count eq 1 and $FIELD_MODEL->get('uitype') neq "19" and
									$FIELD_MODEL->get('uitype') neq "20" and $FIELD_MODEL->get('uitype') neq "30" and
									$FIELD_MODEL->get('name') neq "recurringtype" and $FIELD_MODEL->get('uitype') neq "69" and
									$FIELD_MODEL->get('uitype') neq "105"}
									<td class="fieldLabel {$WIDTHTYPE}"></td>
									<td class="{$WIDTHTYPE}"></td>
									{/if}
									{/foreach}
									{* adding additional column for odd number of fields in a block *}
									{if $FIELD_MODEL_LIST|@end eq true and $FIELD_MODEL_LIST|@count neq 1 and $COUNTER eq 1}
									<td class="fieldLabel {$WIDTHTYPE}"></td>
									<td class="{$WIDTHTYPE}"></td>
									{/if}
								</tr>
							</tbody>
						</table>
						
						<div id="map" style='width:100%;height:400px;margin-top:-20px;'></div>
						{literal}
						<style>
								.warning_signal_blue {
									width: 32px;
									height: 32px;
									border: 1px solid #fff;
									border-radius: 50%;					
									cursor: pointer;
									box-shadow: 0 0 0 #c7161666;
									animation: pulse_blue_sender 1s infinite;
								}
								@-webkit-keyframes pulse_blue_sender {
									0% {
									  -webkit-box-shadow: 0 0 0 0 rgba(199, 22, 22, 0.4);
									}
									70% {
										-webkit-box-shadow: 0 0 0 50px rgba(199, 22, 22, 0);
									}
									100% {
										-webkit-box-shadow: 0 0 0 80px rgba(199, 22, 22, 0);
									}
								}
								.mapboxgl-ctrl-logo {
									display: none !important;
								}
									
								.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
									display: none !important;
								}
						</style>
						<script>
							mapboxgl.accessToken =
								'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';
				
							var long = 120.99972959045539;
							var lat = 14.550066581367545;
				
							var geolocation = (document.getElementById('geolocation').innerHTML).trim();
				
							if (geolocation != '') {
				
								var geo1 = geolocation.split(',');
								long = geo1[1];
								lat = geo1[0];
				
				
								var map = new mapboxgl.Map({
									container: 'map',
									style: 'mapbox://styles/mapbox/streets-v11',
									center: [long, lat],
									zoom: 17
								});
				
								map.addControl(new mapboxgl.FullscreenControl());
										
								var el = document.createElement('div');
								el.className = 'warning_signal_blue';
								el.title = 'INCIDENT'; //incident;
								el.style.backgroundSize = 'contain';
								el.style.backgroundRepeat = 'no-repeat';
								el.style.backgroundColor = '#ff0101';
				
								el.style.width = '32px';
								el.style.height = '32px';
				
								new mapboxgl.Marker(el)
									.setLngLat([long, lat])
									.addTo(map);
				
							} else {
				
								var map = new mapboxgl.Map({
									container: 'map',
									style: 'mapbox://styles/mapbox/streets-v11',
									center: [long, lat],
									zoom: 17
								});
				
								map.addControl(new mapboxgl.FullscreenControl());
				
								// Add geolocate control to the map.
								map.addControl(new mapboxgl.GeolocateControl({
									positionOptions: {
										enableHighAccuracy: true
									},
									trackUserLocation: true
								}));
							}

							///RESPONDER
							//var radiolocationurl = 'api/maps/radio/incidentmap_radiolocation.php';
							//var responder_url    	= 'api/maps/responder/incidentmap_responderlocation.php';
							
							var fire_url  	 		= 'api/maps/responder/firelocation.php';
							var led_url   			= 'api/maps/responder/ledlocation.php';
							var publicsafety_url   	= 'api/maps/responder/publicsafetylocation.php';
							
							map.on('load', function() {
					
								window.setInterval(function() {
									//map.getSource('radio').setData(radiolocationurl);
									//map.getSource('responder').setData(responder_url);
									
									map.getSource('fire_source').setData(fire_url);
									map.getSource('led_source').setData(led_url);
									map.getSource('publicsafety_source').setData(publicsafety_url);
									
								}, 2000);
					
								//map.addSource('radio', {
								//	type: 'geojson',
								///	data: radiolocationurl
								//});

								//map.addSource('responder', {
								//	type: 'geojson',
								//	data: responder_url
								//});
								
								map.addSource('fire_source', {
									type: 'geojson',
									data: fire_url
								});
								
								map.addSource('led_source', {
									type: 'geojson',
									data: led_url
								});
								
								map.addSource('publicsafety_source', {
									type: 'geojson',
									data: publicsafety_url
								});
					
								//var xmlHttp = new XMLHttpRequest();
								//xmlHttp.open("GET", radiolocationurl, false);
								//xmlHttp.send(null);
								//var radiolocationJSON = JSON.parse(xmlHttp.responseText);
								//for (const { geometry, properties } of radiolocationJSON.features) {
								//map.loadImage('api/image/icon.php?id=' + properties.id , function(error, image) {
								//if (error) throw error;
								//	map.addImage('icon_radio_'+properties.id, image);
								//});
								//}
								/*
								map.loadImage('test/images/phone-bayan911.png', function(error, image) {
									if (error) throw error;
									map.addImage('responder_image', image);
								});
								*/
								//PUBLIC SAFETY
								map.loadImage('test/images/icons/publicsafety.png', function(error, publicsafety) {            
									map.addImage('publicsafety_image', publicsafety);
								});
								
								//FIRE DEPARTMENT
								map.loadImage('test/images/icons/fire.png', function(error, fire) {            
									map.addImage('fire_image', fire);
								});
								
								//LED
								map.loadImage('test/images/icons/led.png', function(error, led) {            
									map.addImage('led_image', led);
								});

								//map.addLayer({
								//	"id": "points",
								//	"type": "symbol",
								//	"source": "radio",
								//	"layout": {
								//		"icon-image": ['get', 'icon'],
								//		"icon-size": 1
								//	}
								//});

								/*
								map.addLayer({
									"id": "responder_points",
									"type": "symbol",
									"source": "responder",
									"layout": {
										"icon-image": 'responder_image',
										"icon-size": 1
									}
								});
								*/
								
								map.addLayer({
									"id": "fire_points",
									"type": "symbol",
									"source": "fire_source",
									"layout": {
										'text-field': ['get', 'name'],
										'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
										'text-radial-offset': 1,
										'text-justify': 'auto',
										"icon-image": 'fire_image',
										"icon-size": 1.3
									}
								});
								
								map.addLayer({
									"id": "led_points",
									"type": "symbol",
									"source": "led_source",
									"layout": {
										'text-field': ['get', 'name'],
										'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
										'text-radial-offset': 1,
										'text-justify': 'auto',
										"icon-image": 'led_image',
										"icon-size": 1.3
									}
								});
								
								map.addLayer({
									"id": "publicsafety_points",
									"type": "symbol",
									"source": "publicsafety_source",
									"layout": {
										'text-field': ['get', 'name'],
										'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
										'text-radial-offset': 1,
										'text-justify': 'auto',
										"icon-image": 'publicsafety_image',
										"icon-size": 1.3
									}
								});
								
								map.on('click', 'fire_points', function(e) {
									var coordinates = e.features[0].geometry.coordinates.slice();
									var desc = 'Responder:';
									desc += '<br/>';
									desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
									desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
									desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
									new mapboxgl.Popup()
										.setLngLat(coordinates)
										.setHTML(desc)
										.addTo(map);
								});
								
								map.on('click', 'led_points', function(e) {
									var coordinates = e.features[0].geometry.coordinates.slice();
									var desc = 'Responder:';
									desc += '<br/>';
									desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
									desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
									desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
									new mapboxgl.Popup()
										.setLngLat(coordinates)
										.setHTML(desc)
										.addTo(map);
								});
								
								map.on('click', 'publicsafety_points', function(e) {
									var coordinates = e.features[0].geometry.coordinates.slice();
									var desc = 'Responder:';
									desc += '<br/>';
									desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
									desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
									desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
									new mapboxgl.Popup()
										.setLngLat(coordinates)
										.setHTML(desc)
										.addTo(map);
								});
					
								/*
								map.on('click', 'points', function(e) {
									var coordinates = e.features[0].geometry.coordinates.slice();
									var description = e.features[0].properties.description;
					
									var url = 'https://api.mapbox.com/directions/v5/mapbox/driving-traffic/' + coordinates[0] + ',' +
										coordinates[1] + ';' + long + ',' + lat +
										'?steps=true&geometries=geojson&alternatives=true&access_token=' + mapboxgl.accessToken;
									var xmlHttp = new XMLHttpRequest();
									xmlHttp.open("GET", url, false);
									xmlHttp.send(null);
					
									var result = JSON.parse(xmlHttp.responseText);					
									var minutes = Math.floor(result.routes[0].duration / 60);
					
									var desc = 'Radio:';
									desc += '<br/>';
									desc += '<b style="font-size:15px;">' + description + '</b>';
									desc += '<br/>';
									desc += 'Est. Distance: ' + Math.floor(result.routes[0].distance) + ' meters';
									desc += '<br/>';
									desc += 'Est. Duration: ' + minutes + ' minutes';
									desc += '<br/>';
									desc += '<br/>';
									
									while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
										coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
									}
					
									new mapboxgl.Popup()
										.setLngLat(coordinates)
										.setHTML(desc)
										.addTo(map);
								});
								*/
								/*
								map.on('click', 'responder_points', function(e) {
									var coordinates = e.features[0].geometry.coordinates.slice();
									var description = e.features[0].properties.description;
					
									var url = 'https://api.mapbox.com/directions/v5/mapbox/driving-traffic/' + coordinates[0] + ',' +
										coordinates[1] + ';' + long + ',' + lat +
										'?steps=true&geometries=geojson&alternatives=true&access_token=' + mapboxgl.accessToken;
									var xmlHttp = new XMLHttpRequest();
									xmlHttp.open("GET", url, false);
									xmlHttp.send(null);
					
									var result = JSON.parse(xmlHttp.responseText);
					
									var minutes = Math.floor(result.routes[0].duration / 60);
					
									var desc = 'Responder:';
									desc += '<br/>';
									desc += '<b style="font-size:15px;">' + e.features[0].properties.name + '</b>';
									desc += '<br/>';
									desc += 'Est. Distance: ' + Math.floor(result.routes[0].distance) + ' meters';
									desc += '<br/>';
									desc += 'Est. Duration: ' + minutes + ' minutes';
									desc += '<br/>';
									desc += '<br/>';
									
									while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
										coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
									}
					
									new mapboxgl.Popup()
										.setLngLat(coordinates)
										.setHTML(desc)
										.addTo(map);
								});
								*/
							});
						</script>
						{/literal}
					</div>
				</div>
				
				{else}
		
			<div class="block block_{$BLOCK_LABEL_KEY}" data-block="{$BLOCK_LABEL_KEY}" data-blockid="{$BLOCK_LIST[$BLOCK_LABEL_KEY]->get('id')}">
			{assign var=IS_HIDDEN value=$BLOCK->isHidden()}
			{assign var=WIDTHTYPE value=$USER_MODEL->get('rowheight')}
			<input type=hidden name="timeFormatOptions" data-value='{$DAY_STARTS}' />
			<div>
				<h5 class="textOverflowEllipsis maxWidth50">
					<img class="cursorPointer alignMiddle blockToggle {if !($IS_HIDDEN)} hide {/if}" src="{vimage_path('arrowRight.png')}" data-mode="hide" data-id={$BLOCK_LIST[$BLOCK_LABEL_KEY]->get('id')}>
					<img class="cursorPointer alignMiddle blockToggle {if ($IS_HIDDEN)} hide {/if}" src="{vimage_path('arrowdown.png')}" data-mode="show" data-id={$BLOCK_LIST[$BLOCK_LABEL_KEY]->get('id')}>&nbsp;
					{vtranslate({$BLOCK_LABEL_KEY},{$MODULE_NAME})}
				</h5>
			</div>
			<hr>
			<div class="blockData">
				<table class="table detailview-table no-border">
					<tbody {if $IS_HIDDEN} class="hide" {/if}>
						{assign var=COUNTER value=0}
						<tr>
							{foreach item=FIELD_MODEL key=FIELD_NAME from=$FIELD_MODEL_LIST}
								{assign var=fieldDataType value=$FIELD_MODEL->getFieldDataType()}
								{if !$FIELD_MODEL->isViewableInDetailView()}
									{continue}
								{/if}
								{if $FIELD_MODEL->get('uitype') eq "83"}
									{foreach item=tax key=count from=$TAXCLASS_DETAILS}
										{if $COUNTER eq 2}
											</tr><tr>
											{assign var="COUNTER" value=1}
										{else}
											{assign var="COUNTER" value=$COUNTER+1}
										{/if}
										<td class="fieldLabel {$WIDTHTYPE}">
											<span class='muted'>{vtranslate($tax.taxlabel, $MODULE)}(%)</span>
										</td>
										<td class="fieldValue {$WIDTHTYPE}">
											<span class="value textOverflowEllipsis" data-field-type="{$FIELD_MODEL->getFieldDataType()}" >
												{if $tax.check_value eq 1}
													{$tax.percentage}
												{else}
													0
												{/if} 
											</span>
										</td>
									{/foreach}
								{else if $FIELD_MODEL->get('uitype') eq "69" || $FIELD_MODEL->get('uitype') eq "105"}
									{if $COUNTER neq 0}
										{if $COUNTER eq 2}
											</tr><tr>
											{assign var=COUNTER value=0}
										{/if}
									{/if}
									<td class="fieldLabel {$WIDTHTYPE}"><span class="muted">{vtranslate({$FIELD_MODEL->get('label')},{$MODULE_NAME})}</span></td>
									<td class="fieldValue {$WIDTHTYPE}">
										<ul id="imageContainer">
											{foreach key=ITER item=IMAGE_INFO from=$IMAGE_DETAILS}
												{if !empty($IMAGE_INFO.url) && !empty({$IMAGE_INFO.orgname})}
													<li><img src="{$IMAGE_INFO.url}" title="{$IMAGE_INFO.orgname}" width="400" height="300" /></li>
												{/if}
											{/foreach}
										</ul>
									</td>
									{assign var=COUNTER value=$COUNTER+1}
								{else}
									{if $FIELD_MODEL->get('uitype') eq "20" or $FIELD_MODEL->get('uitype') eq "19" or $fieldDataType eq 'reminder' or $fieldDataType eq 'recurrence'}
										{if $COUNTER eq '1'}
											<td class="fieldLabel {$WIDTHTYPE}"></td><td class="{$WIDTHTYPE}"></td></tr><tr>
											{assign var=COUNTER value=0}
										{/if}
									{/if}
									{if $COUNTER eq 2}
										</tr><tr>
										{assign var=COUNTER value=1}
									{else}
										{assign var=COUNTER value=$COUNTER+1}
									{/if}
									<td class="fieldLabel textOverflowEllipsis {$WIDTHTYPE}" id="{$MODULE_NAME}_detailView_fieldLabel_{$FIELD_MODEL->getName()}" {if $FIELD_MODEL->getName() eq 'description' or $FIELD_MODEL->get('uitype') eq '69'} style='width:8%'{/if}>
										<span class="muted">
											{if $MODULE_NAME eq 'Documents' && $FIELD_MODEL->get('label') eq "File Name" && $RECORD->get('filelocationtype') eq 'E'}
												{vtranslate("LBL_FILE_URL",{$MODULE_NAME})}
											{else}
												{vtranslate({$FIELD_MODEL->get('label')},{$MODULE_NAME})}
											{/if}
											{if ($FIELD_MODEL->get('uitype') eq '72') && ($FIELD_MODEL->getName() eq 'unit_price')}
												({$BASE_CURRENCY_SYMBOL})
											{/if}
										</span>
									</td>
									<td class="fieldValue {$WIDTHTYPE}" id="{$MODULE_NAME}_detailView_fieldValue_{$FIELD_MODEL->getName()}" {if $FIELD_MODEL->get('uitype') eq '19' or $fieldDataType eq 'reminder' or $fieldDataType eq 'recurrence'} colspan="3" {assign var=COUNTER value=$COUNTER+1} {/if}>
										{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
										{if $fieldDataType eq 'multipicklist'}
											{assign var=FIELD_DISPLAY_VALUE value=$FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue'))}
										{else}
											{assign var=FIELD_DISPLAY_VALUE value=Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}
										{/if}

										<span class="value" data-field-type="{$FIELD_MODEL->getFieldDataType()}" {if $FIELD_MODEL->get('uitype') eq '19' or $FIELD_MODEL->get('uitype') eq '21'} style="white-space:normal;" {/if}>
										        {if $FIELD_MODEL->getFieldDataType() eq 'phone'}
												    <a style="text-decoration: underline;" href="tel:{include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName(),$MODULE_NAME) FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}">													
													<u>

													{include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName(),$MODULE_NAME) FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
													
													</u>
													</a>
												{else}
											        {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName(),$MODULE_NAME) FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
												{/if}
										
										</span>
										{if $IS_AJAX_ENABLED && $FIELD_MODEL->isEditable() eq 'true' && $FIELD_MODEL->isAjaxEditable() eq 'true'}
											<span class="hide edit pull-left">
												{if $fieldDataType eq 'multipicklist'}
													<input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}[]' data-type="{$fieldDataType}" data-displayvalue='{$FIELD_DISPLAY_VALUE}' data-value="{$FIELD_VALUE}" />
												{else}
													<input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}' data-type="{$fieldDataType}" data-displayvalue='{$FIELD_DISPLAY_VALUE}' data-value="{$FIELD_VALUE}" />
												{/if}
											</span>
											<span class="action pull-right"><a href="#" onclick="return false;" class="editAction fa fa-pencil"></a></span>
										{/if}
									</td>
								{/if}

								{if $FIELD_MODEL_LIST|@count eq 1 and $FIELD_MODEL->get('uitype') neq "19" and $FIELD_MODEL->get('uitype') neq "20" and $FIELD_MODEL->get('uitype') neq "30" and $FIELD_MODEL->get('name') neq "recurringtype" and $FIELD_MODEL->get('uitype') neq "69" and $FIELD_MODEL->get('uitype') neq "105"}
									<td class="fieldLabel {$WIDTHTYPE}"></td><td class="{$WIDTHTYPE}"></td>
								{/if}
							{/foreach}
							{* adding additional column for odd number of fields in a block *}
							{if $FIELD_MODEL_LIST|@end eq true and $FIELD_MODEL_LIST|@count neq 1 and $COUNTER eq 1}
								<td class="fieldLabel {$WIDTHTYPE}"></td><td class="{$WIDTHTYPE}"></td>
							{/if}
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		{/if}
		<br>
	{/foreach}
	
{/strip}