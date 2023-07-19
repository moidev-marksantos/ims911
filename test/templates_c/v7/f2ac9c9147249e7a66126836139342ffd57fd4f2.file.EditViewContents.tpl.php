<?php /* Smarty version Smarty-3.1.7, created on 2021-11-24 11:51:33
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\partials\EditViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19556806860e69124aa4171-47350278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ac9c9147249e7a66126836139342ffd57fd4f2' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\partials\\EditViewContents.tpl',
      1 => 1637725892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19556806860e69124aa4171-47350278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e69124bb4f0',
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'DUPLICATE_RECORDS' => 0,
    'MODULE' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_FIELDS' => 0,
    'BLOCK_LABEL' => 0,
    'FIELD_MODEL' => 0,
    'refrenceList' => 0,
    'COUNTER' => 0,
    'MASS_EDITION_MODE' => 0,
    'isReferenceField' => 0,
    'refrenceListCount' => 0,
    'DISPLAYID' => 0,
    'REFERENCED_MODULE_STRUCTURE' => 0,
    'value' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'TAXCLASS_DETAILS' => 0,
    'taxCount' => 0,
    'FILE_LOCATION_TYPE_FIELD' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e69124bb4f0')) {function content_60e69124bb4f0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp7.4\\htdocs\\bayan911\\libraries\\Smarty\\libs\\plugins\\modifier.replace.php';
?>
<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><div name='editContent'><?php if ($_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value){?><div class="fieldBlockContainer duplicationMessageContainer"><div class="duplicationMessageHeader"><b><?php echo vtranslate('LBL_DUPLICATES_DETECTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></div><div><?php echo getDuplicatesPreventionMessage($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value);?>
</div></div><?php }?><?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?><?php if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)>0){?><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value=='Location Details'&&$_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?><div class='fieldBlockContainer' data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><h5 class='fieldBlockHeader'><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><hr><table class="table table-borderless"><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars["isReferenceField"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceList"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceListCount"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['refrenceList']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()==true){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="19"){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value=='1'){?><td></td><td></td></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel alignMiddle"><?php if ($_smarty_tpl->tpl_vars['MASS_EDITION_MODE']->value){?><input class="inputElement" id="include_in_mass_edit_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-update-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="checkbox">&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value=="reference"){?><?php if ($_smarty_tpl->tpl_vars['refrenceListCount']->value>1){?><?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCTURE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value->get('name'), null, 0);?><?php }?><select style="width: 140px;" class="select2 referenceModulesList"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refrenceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['value']->value);?>
</option><?php } ?></select><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="83"){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COUNTER'=>$_smarty_tpl->tpl_vars['COUNTER']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value){?><?php $_smarty_tpl->tpl_vars['taxCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value)%2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['taxCount']->value==0){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(2, null, 0);?><?php }?><?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Documents'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label')=='File Name'){?><?php $_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_FILE_INFORMATION']['filelocationtype'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value){?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value->get('fieldvalue')=='E'){?><?php echo vtranslate("LBL_FILE_URL",$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></td><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!='83'){?><td <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype'),array('19','69'))||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='description'||(($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='recurringtype'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='reminder_time')&&in_array($_tmp1,array('Events','Calendar')))){?> class="fieldValue fieldValueWidth80" colspan="3" <?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?> <?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='56'){?> class="fieldValue checkBoxType" <?php }elseif($_smarty_tpl->tpl_vars['isReferenceField']->value=='reference'||$_smarty_tpl->tpl_vars['isReferenceField']->value=='multireference'){?> class="fieldValue p-t-8" <?php }else{ ?>class="fieldValue" <?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?><?php }?><?php } ?><?php if ((1 & $_smarty_tpl->tpl_vars['COUNTER']->value)){?><td></td><td></td><?php }?></tr></table><div id="map" style='width:100%;height:250px;margin-top:-20px;'></div>
        <script>
        
            document.getElementById("HelpDesk_editView_fieldName_cf_854").readOnly = true;
            var token = 'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';
            mapboxgl.accessToken = token;

            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11?optimize=true',
                center: [121.0177554, 14.5517946],
                zoom: 15
            });

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

			var geocoder = new MapboxGeocoder({
				accessToken     : mapboxgl.accessToken,				
				countries       : "ph",
				placeholder     : "Enter location...",	
                marker          : false                
			});

			map.addControl(geocoder);	

			$(".mapboxgl-ctrl-geocoder--input").focus();

			geocoder.on('result', function (ev) {                
				marker.setLngLat(ev.result.geometry.coordinates);
				marker.addTo(map);				
                var lngLat = marker.getLngLat();
                searchStreet(lngLat);
                
                //$('#select_cf_856').select2('data', {id: ev.result.context[3].text, text: ev.result.context[3].text}); //MUNICIPALITY
			    //$('#select_cf_858').select2('data', {id: ev.result.context[1].text, text: ev.result.context[1].text}); //BARANGAY
                
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
			    
			    var theUrl = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+ lngLat.lng + "," + lngLat.lat +".json?types=poi&access_token=" + token;
			    var xmlHttp = new XMLHttpRequest();
				xmlHttp.open("GET", theUrl, false);
				xmlHttp.send(null);
				var result = JSON.parse(xmlHttp.responseText);		
                var streetname = "";
                try {
                    streetname = result.features[0].properties.address;
                }
                catch(err) {
                    streetname = "";
                }
			    document.getElementById('HelpDesk_editView_fieldName_cf_860').value = streetname; //STREET NAME
			    document.getElementById('HelpDesk_editView_fieldName_cf_862').value = result.features[0].text; //NEAREST LANDMARK
			    
			    $('#select_cf_856').select2('data', {id: result.features[0].context[3].text, text: result.features[0].context[3].text}); //MUNICIPALITY
			    $('#select_cf_858').select2('data', {id: result.features[0].context[1].text, text: result.features[0].context[1].text}); //BARANGAY
			    
			}
			
        </script>
        </div><?php }else{ ?><div class='fieldBlockContainer' data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><h5 class='fieldBlockHeader'><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><hr><table class="table table-borderless"><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars["isReferenceField"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceList"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceListCount"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['refrenceList']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()==true){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="19"){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value=='1'){?><td></td><td></td></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label')=='Contact Name'){?><?php }?><td id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),' ','_');?>
1" class="fieldLabel alignMiddle"><?php if ($_smarty_tpl->tpl_vars['MASS_EDITION_MODE']->value){?><input class="inputElement" id="include_in_mass_edit_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-update-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="checkbox">&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value=="reference"){?><?php if ($_smarty_tpl->tpl_vars['refrenceListCount']->value>1){?><?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCTURE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value->get('name'), null, 0);?><?php }?><select style="width: 140px;" class="select2 referenceModulesList"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refrenceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['value']->value);?>
</option><?php } ?></select><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="83"){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COUNTER'=>$_smarty_tpl->tpl_vars['COUNTER']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value){?><?php $_smarty_tpl->tpl_vars['taxCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value)%2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['taxCount']->value==0){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(2, null, 0);?><?php }?><?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Documents'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label')=='File Name'){?><?php $_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_FILE_INFORMATION']['filelocationtype'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value){?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value->get('fieldvalue')=='E'){?><?php echo vtranslate("LBL_FILE_URL",$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></td><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!='83'){?><td id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),' ','_');?>
2" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype'),array('19','69'))||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='description'||(($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='recurringtype'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='reminder_time')&&in_array($_tmp2,array('Events','Calendar')))){?> class="fieldValue fieldValueWidth80" colspan="3" <?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?> <?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='56'){?> class="fieldValue checkBoxType" <?php }elseif($_smarty_tpl->tpl_vars['isReferenceField']->value=='reference'||$_smarty_tpl->tpl_vars['isReferenceField']->value=='multireference'){?> class="fieldValue p-t-8" <?php }else{ ?>class="fieldValue" <?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?><?php }?><?php } ?><?php if ((1 & $_smarty_tpl->tpl_vars['COUNTER']->value)){?><td></td><td></td><?php }?></tr></table></div><?php }?><?php }?><?php } ?></div><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?>
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
<?php }?><?php }} ?>