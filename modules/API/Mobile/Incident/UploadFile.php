<?php

include_once 'modules/API/Mobile/API.php';

class UploadFile
{

    public function upload()
    {
        global $adb , $upload_maxsize;

        $filecontent    = $_FILES["attachment"]["tmp_name"];
        $filename       = $_FILES["attachment"]["name"];
        $filetype       = $_FILES["attachment"]["type"];
        $filesize       = $_FILES["attachment"]["size"]; 
        
        $incidentid     = $_POST['incidentid'];
        $responder_id   = $_POST['responder_id'];

        if($upload_maxsize < $filesize){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => $filesize . " bytes. This file is too large to upload. The max supported file " . $upload_maxsize . " bytes.",
            )));
        }
        else
        {        
        if($_FILES['attachment']['error'] > UPLOAD_ERR_OK)
        {
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "The file was not uploaded.",
            )));
        }
        else
        {
            $attachid = $adb->getUniqueId('vtiger_crmentity');

            $adb->pquery("INSERT INTO vtiger_crmentity(crmid, smcreatorid, smownerid, modifiedby, setype, description, createdtime, modifiedtime, presence, deleted) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW(), ?, ?)", array($attachid, 1, 1, 1, 'Attachment', '', 1, 0));

            $upload_file_path = decideFilePath() . $attachid . "_" . $filename;
            move_uploaded_file($filecontent, $upload_file_path);
            
            $adb->pquery("INSERT INTO vtiger_attachments(attachmentsid, name,description,type,path) VALUES(?,?,?,?,?)", array($attachid, $filename, "upload", mime_content_type($upload_file_path), decideFilePath()));
            
            $vtiger_responder = $adb->pquery("SELECT CONCAT(responder_tks_firstname,' ',responder_tks_lastname) as name FROM vtiger_responder WHERE responderid = ?", 
            array($responder_id));

            //GET ADMIN USER 
            $user = CRMEntity::getInstance('Users');
            $user->id = $user->getActiveAdminId();
            $user->retrieve_entity_info($user->id, 'Users');
            
            $document['notes_title']         = $filename;
            $document['notecontent']         = "Uploaded by: " . $adb->query_result($vtiger_responder,0,"name");;
            $document['filetype']            = $filetype;
            $document['filesize']            = $filesize;
            $document['filename']            = "Uploaded by: " . $adb->query_result($vtiger_responder,0,"name");
            $document['filelocationtype']    = 'I';
            $document['filestatus']          = 'I';
            $document['file']                = $upload_file_path;
            $document['fileversion']         = '1.0.0';
            $document['filestatus']          = 1;
            $document['source']              = "MOBILE";
            $document['assigned_user_id']    = 1;

            $record = vtws_create('Documents', $document, $user);
            $docid = explode("x",$record['id'])[1];

            $adb->pquery("INSERT INTO vtiger_seattachmentsrel(crmid, attachmentsid) VALUES(?,?)", array($docid, $attachid));
            $adb->pquery("INSERT INTO vtiger_senotesrel(crmid, notesid) VALUES(?,?)", array($incidentid, $docid));
                       
            $id = $adb->getUniqueId('vtiger_modtracker_basic');
            $currentTime = date('Y-m-d H:i:s');

            $adb->pquery('INSERT INTO vtiger_modtracker_basic(id, crmid, module, whodid, changedon, status) VALUES(?,?,?,?,?,?)', 
            array($id , $incidentid, "HelpDesk", "Responder: " . $adb->query_result($vtiger_responder,0,"name"), $currentTime, 4));

            $adb->pquery('INSERT INTO vtiger_modtracker_relations(id, targetmodule, targetid, changedon) VALUES(?,?,?,?)', 
            array($id, "Documents", $docid, $currentTime));

            http_response_code(200);
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => "The file was successfully uploaded.",
            )));

            //START:             
            $fp = fopen('api-logs.txt', 'a');    
            date_default_timezone_set('Asia/Manila');                
            fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - UPLOAD FILE: Incident Id - " . $incidentid . " - Filename - " . $filename . " by " . $adb->query_result($vtiger_responder,0,"name"));  
            fclose($fp); 
            //END: LOGS

        }
        
        }
    }
}
