<?php
/***********************************************************************************
 * The content of this file is subject to the ITS4YouPicklistImport license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ************************************************************************************/

class ITS4YouPicklistImport {


    //var $LBL_MODULE_NAME='Picklist Import 4 You';
    var $LBL_SETTINGS_NAME ='Picklist Import 4 You';
    var $LBL_MODULE_NAME = 'Picklist Import 4 You';

    // Cache to speed up describe information store
    protected static $moduleDescribeCache = array();

    function __construct() {
        global $log, $currentModule;

        $this->db = PearDatabase::getInstance();
        $this->log = $log;
    }
    
    
    function vtlib_handler($moduleName, $eventType) {
    //echo "event type: ".$eventType."<br>";
		if($eventType == 'module.postinstall') {
                $this->updateSettings();
                
        } else if($eventType == 'module.disabled') {
        // TODO Handle actions when this module is disabled.
                //$this->db->pquery('UPDATE vtiger_settings_field SET active= 1  WHERE  name= ?',array($this->LBL_MODULE_NAME));
                $this->updateSettings(false);
        } else if($eventType == 'module.enabled') {
        // TODO Handle actions when this module is enabled.
                //$this->db->pquery('UPDATE vtiger_settings_field SET active= 0  WHERE  name= ?',array($this->LBL_MODULE_NAME));
                $this->updateSettings();
        } else if($eventType == 'module.preuninstall') {
        // TODO Handle actions when this module is about to be deleted.
        } else if($eventType == 'module.preupdate') {
        // TODO Handle actions before this module is updated.
        } else if($eventType == 'module.postupdate') {
        // TODO Handle actions after this module is updated.
        }
    }

    static function checkAdminAccess($user) {
        
    }

    static function getModuleDescribe($module) {
        
    }

    static function getFieldInfo($module, $fieldname) {
        
    }

    static function getFieldInfos($module) {
        
    }
     public function updateSettings($enabled = true){
 
                $result2=$this->db->pquery("SELECT * FROM vtiger_links WHERE linklabel LIKE 'ITS4YouPicklistImportActionsJS'");
        if(!$this->db->num_rows($result2)){
            if ($enabled) {
                $result1=$this->db->pquery("SELECT * FROM vtiger_links_seq WHERE 1");
                $cur_id = $this->db->query_result($result1, 0, 'id');
                $cur_id=$cur_id+1;
                $result5=$this->db->pquery("SELECT * FROM `vtiger_version` ORDER by id DESC LIMIT 1");
                $cur_layout = $this->db->query_result($result5, 0, 'current_version');
                $versionInfo = explode(".", $cur_layout);
                
                 if($versionInfo[0] == 7){
                 $linkurl= 'layouts/v7/modules/ITS4YouPicklistImport/resources/ITS4YouPicklistImportActions.js';
                } else {
                $linkurl= 'layouts/vlayout/modules/ITS4YouPicklistImport/resources/ITS4YouPicklistImportActions.js';
                }
                
                $result3=$this->db->pquery("SELECT * FROM vtiger_tab WHERE name LIKE 'ITS4YouPicklistImport'");
                $tab_id = $this->db->query_result($result3, 0, 'tabid');
                
                $this->db->pquery('UPDATE vtiger_links_seq SET id =?', array($cur_id));
                $this->db->pquery('INSERT INTO vtiger_links(linkid, tabid, linktype, linklabel, linkurl, sequence) VALUES (?,?,?,?,?,?)', array($cur_id,$tab_id,'HEADERSCRIPT','ITS4YouPicklistImportActionsJS',$linkurl,0));

        } else {

            $result4= $this->db->pquery("DELETE FROM vtiger_links WHERE linklabel LIKE 'ITS4YouPicklistImportActionsJS'");
        }
     
     }
     else {
     if (!$enabled){
       $result4= $this->db->pquery("DELETE FROM vtiger_links WHERE linklabel LIKE 'ITS4YouPicklistImportActionsJS'");
     }
     }
}
}