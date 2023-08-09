<?php

class HelpDesk_ExportReport_View extends Vtiger_Detail_View {
    
    function __construct() {
		parent::__construct();
		$this->exposeMethod('GetPrintReport');
    }

    function checkPermission(Vtiger_Request $request) {
		return true;
	}
    
    function preProcess(Vtiger_Request $request) {
		return false;
	}

	function postProcess(Vtiger_Request $request) {
		return false;
	}

    function process(Vtiger_request $request) {
		$mode = $request->getMode();
		if(!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
		}
    }
    
    function GetPrintReport(Vtiger_Request $request) {		
        $viewer = $this->getViewer($request);
		$moduleName = $request->getModule();
		$recordId = $request->get('record');
		
		$reportModel = HelpDesk_Record_Model::getInstanceById($recordId);        
		$ticketdetails = $reportModel->getTicketdetails();		
		$responderlist = $reportModel->getResponders();		
		$documentlist = $reportModel->getDocumentRelatedToIncident();		
		$responderlogslist = $reportModel->getResponderLogs();		
		$casualtieslist = $reportModel->getCasualties();		
		$casualtiestypelist = $reportModel->getCasualtiesType();		
		
		$viewer->assign('TICKET_DETAILS', $ticketdetails);		
		$viewer->assign('RESPONDER_LIST', $responderlist);		
		$viewer->assign('DOCUMENT_LIST', $documentlist);		
		$viewer->assign('RESPONDERLOGS_LIST', $responderlogslist);		
		$viewer->assign('CASUALTY_LIST', $casualtieslist);		
		$viewer->assign('CASUALTY_TYPE_LIST', $casualtiestypelist);	
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());		
		$viewer->view('Nueva.tpl', $moduleName);
	}
}
