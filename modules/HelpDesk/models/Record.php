<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class HelpDesk_Record_Model extends Vtiger_Record_Model
{

	/**
	 * Function to get the Display Name for the record
	 * @return <String> - Entity Display Name for the record
	 */
	public function getDisplayName()
	{
		return Vtiger_Util_Helper::getRecordName($this->getId());
	}

	/**
	 * Function to get URL for Convert FAQ
	 * @return <String>
	 */
	public function getConvertFAQUrl()
	{
		return "index.php?module=" . $this->getModuleName() . "&action=ConvertFAQ&record=" . $this->getId();
	}

	/**
	 * Function to get Comments List of this Record
	 * @return <String>
	 */
	public function getCommentsList()
	{
		$db = PearDatabase::getInstance();
		$commentsList = array();

		$result = $db->pquery("SELECT commentcontent AS comments FROM vtiger_modcomments WHERE related_to = ?", array($this->getId()));
		$numOfRows = $db->num_rows($result);

		for ($i = 0; $i < $numOfRows; $i++) {
			array_push($commentsList, $db->query_result($result, $i, 'comments'));
		}

		return $commentsList;
	}

	public function getPrintreporturl()
	{
		return "index.php?module=" . $this->getModuleName() . "&view=ExportReport&mode=GetPrintReport&record=" . $this->getId() . "&source=tabular";
	}

	public function getTicketdetails()
	{
		$db = PearDatabase::getInstance();

		$result = $db->pquery("SELECT 
		vt.title, 
		vt.ticket_no, 
		category as incidenttype , 
		cf_860 as location ,
		cf_862 as nearest_landmark ,
		'' as duration , 
		vcrm.createdtime,
		CONCAT(vcon.firstname, ' ', vcon.lastname) as reported_by,
		CONCAT(vu.first_name, ' ', vu.last_name) as reported_to,
		vcrm.description ,
		vt.status,
		cf_989 as incidentdate,
		cf_991 as incidenttime,
		vt.solution,
		cf_864 as contact_no, 
		vconcf.cf_999 as gender,
		cf_937 as dispatch_to
		FROM vtiger_troubletickets as vt
		LEFT JOIN vtiger_ticketcf vtcf ON vtcf.ticketid = vt.ticketid
		LEFT JOIN vtiger_crmentity vcrm ON vcrm.crmid = vt.ticketid
		LEFT JOIN vtiger_contactdetails vcon ON vcon.contactid = vt.contact_id
		LEFT JOIN vtiger_contactscf vconcf ON vcon.contactid = vconcf.contactid
		LEFT JOIN vtiger_users vu ON vcrm.smownerid = vu.id
		WHERE vt.ticketid = ?", array(
			$this->getId()
		));

		$ticket = array(
			"ticket_no" => $db->query_result($result, 0, 'ticket_no'),
			"incidenttype" => $db->query_result($result, 0, 'incidenttype'),
			"location" => $db->query_result($result, 0, 'location'),
			"nearest_landmark" => $db->query_result($result, 0, 'nearest_landmark'),
			"reported_by" => $db->query_result($result, 0, 'reported_by'),
			"gender" => $db->query_result($result, 0, 'gender'),
			"contact_no" => $db->query_result($result, 0, 'contact_no'),
			"incidentdate" => $db->query_result($result, 0, 'incidentdate'),
			"incidenttime" => $db->query_result($result, 0, 'incidenttime'),
			"reported_to" => $db->query_result($result, 0, 'reported_to'),			
			"createdtime" => $db->query_result($result, 0, 'createdtime'),
			"dispatch_to" => $db->query_result($result, 0, 'dispatch_to'),
			"description" => nl2br(purifyHtmlEventAttributes($db->query_result($result, 0, 'description'), true)),
			"solution" => nl2br(purifyHtmlEventAttributes($db->query_result($result, 0, 'solution'), true)),
			"status" => $db->query_result($result, 0, 'status'),
			
		);

		return $ticket;
	}

	public function getResponders(){
        global $adb;
        $result = $adb->pquery("SELECT vtiger_responder.responderid , responder_tks_firstname , responder_tks_lastname , responder_tks_respondertype FROM vtiger_responderlogs LEFT JOIN vtiger_responder ON vtiger_responderlogs.responderlogs_tks_responder = vtiger_responder.responderid WHERE responderlogs_tks_incident = ? GROUP BY responder_tks_firstname,responder_tks_lastname", array($this->getId()));
        $responders = array();
        if($adb->num_rows($result) > 0){          
            for($index = 0; $index < $adb->num_rows($result); $index++){
				if($adb->query_result($result,$index,"responder_tks_firstname") != ''){
                array_push($responders,
                    array(
                        "responderid"	=> $adb->query_result($result,$index,"responderid"),                        
                        "type"			=> $adb->query_result($result,$index,"responder_tks_respondertype"),                        
                        "firstname"  	=> $adb->query_result($result,$index,"responder_tks_firstname"),                        
                        "lastname"  	=> $adb->query_result($result,$index,"responder_tks_lastname"),                        
                    )
                );
				}
            }
            return $responders;
        }
        return null;
	}

	public function getResponderLogs(){
		global $adb;
        $result = $adb->pquery("SELECT vtiger_responderlogs.* , vtiger_crmentity.createdtime FROM vtiger_responderlogs 
		LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_responderlogs.responderlogsid
		WHERE responderlogs_tks_incident = ? AND deleted = 0 
		ORDER BY vtiger_crmentity.createdtime DESC", array($this->getId()));
        $responder_logs = array();
        if($adb->num_rows($result) > 0){
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($responder_logs,
                    array(
                        "incident"  	=> $adb->query_result($result,$index,"responderlogs_tks_incident"),                        
                        "responder"  	=> $adb->query_result($result,$index,"responderlogs_tks_responder"),                        
                        "remarks"  		=> $adb->query_result($result,$index,"responderlogs_tks_remarks"),                       
                        "status"  		=> $adb->query_result($result,$index,"responderlogs_tks_status"),                       
                        "createdtime"  	=> $adb->query_result($result,$index,"createdtime"),                       
                    )
                );
            }
            return $responder_logs;
        }
        return null;
	}

	//Added By Microbiz One Inc - Mark Santos
	public function getTicketTitle(){
		$db = PearDatabase::getInstance();
		$result = $db->pquery("SELECT vt.title FROM vtiger_troubletickets as vt WHERE vt.ticketid = ?", array(
			$this->getId()
		));
		return $db->query_result($result, 0, 'title');
	}
	
	//Added By Microbiz One Inc - Mark Santos
	public function getTicketSource(){
		$db = PearDatabase::getInstance();
		$result = $db->pquery("SELECT source FROM vtiger_crmentity WHERE crmid = ?", array(
			$this->getId()
		));
		return $db->query_result($result, 0, 'source');
	}

	public function getDocumentRelatedToIncident()
	{
		$incidentid = $this->getId();
		$db = PearDatabase::getInstance();

		$documentRes = $db->pquery("SELECT * FROM vtiger_senotesrel
							INNER JOIN vtiger_crmentity ON vtiger_senotesrel.notesid = vtiger_crmentity.crmid AND vtiger_senotesrel.crmid = ?
							INNER JOIN vtiger_notes ON vtiger_notes.notesid = vtiger_senotesrel.notesid
							INNER JOIN vtiger_seattachmentsrel ON vtiger_seattachmentsrel.crmid = vtiger_notes.notesid
							INNER JOIN vtiger_attachments ON vtiger_attachments.attachmentsid = vtiger_seattachmentsrel.attachmentsid
							WHERE vtiger_crmentity.deleted = 0 AND type = 'image/jpeg' OR type = 'image/jpg'", array($incidentid));
		$numOfRows = $db->num_rows($documentRes);
		$documentsList = array();
		if ($numOfRows) {
			for ($i = 0; $i < $numOfRows; $i++) {
				
				$attachmentId = $db->query_result($documentRes, $i, 'attachmentsid');
				$name = $db->query_result($documentRes, $i, 'name');
				$crmid = $db->query_result($documentRes, $i, 'crmid');
				
				$documentsList[$i]['name'] = decode_html($name);
				$documentsList[$i]['notecontent'] = $db->query_result($documentRes, $i, 'notecontent');
				$documentsList[$i]['attachmentsid'] = $attachmentId;
				$documentsList[$i]['path'] = $db->query_result($documentRes, $i, 'path');
				$documentsList[$i]['downloadurl'] = "index.php?module=Documents&action=DownloadFile&record=$crmid&fileid=$attachmentId&name=$name";				
				$documentsList[$i]['type'] = $db->query_result($documentRes, $i, 'type');
			}
		}
		return $documentsList;
	}

	public function getCasualties(){
		global $adb;
        $result = $adb->pquery("SELECT cf_987, vtiger_casualty.* FROM vtiger_crmentityrel 
		LEFT JOIN vtiger_casualty ON vtiger_crmentityrel.relcrmid = vtiger_casualty.casualtyid
		LEFT JOIN vtiger_casualtycf ON vtiger_casualty.casualtyid = vtiger_casualtycf.casualtyid
		WHERE crmid = ? AND relmodule = 'Casualty'", array($this->getId()));

        $casualties = array();

        if($adb->num_rows($result) > 0){
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($casualties,
                    array(
                        "type" => $adb->query_result($result,$index,"cf_987"),                        
                        "name" => $adb->query_result($result,$index,"casualty_tks_name"),                        
                        "age" => $adb->query_result($result,$index,"casualty_tks_age"),                        
                        "sex" => $adb->query_result($result,$index,"casualty_tks_sex"),                        
                        "residenceplace" => $adb->query_result($result,$index,"casualty_tks_residenceplace"),                        
                        "remarks" => $adb->query_result($result,$index,"casualty_tks_remarks"),                        
                    )
                );
            }
            return $casualties;
        }
        return null;
	}

	public function getCasualtiesType(){
		global $adb;
        $result = $adb->pquery("SELECT * FROM vtiger_cf_987", array());
        $casualtiestype = array();
        if($adb->num_rows($result) > 0){
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($casualtiestype,
                    array(
                        "id" => $adb->query_result($result,$index,"cf_987id"),                                         
                        "type" => $adb->query_result($result,$index,"cf_987"),                                         
                    )
                );
            }
            return $casualtiestype;
        }
        return null;
	}

	public function getresponderlogslist(){

	}

}
