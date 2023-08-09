<?php

class HelpDesk_LiveUpdateAjax_Action extends Vtiger_Action_Controller
{

    public function checkPermission(Vtiger_Request $request)
    {

    }

 
    public function __construct()
    {
        $this->exposeMethod("getHelpDesk");
        $this->exposeMethod("getLastId");
    }

 

    public function process(Vtiger_Request $request)
    {
        $mode = $request->get("mode");
        if (!empty($mode)) {
            $this->invokeExposedMethod($mode, $request);
        }

    }

 

    public function getHelpDesk(Vtiger_Request $request)
    {

        $response = new Vtiger_Response();
        global $adb;
        $result = array();
        $res = $adb->pquery('SELECT ticketid FROM vtiger_troubletickets INNER JOIN vtiger_crmentity ON vtiger_troubletickets.ticketid = vtiger_crmentity.crmid WHERE ticketid > ? AND vtiger_crmentity.deleted = 0 ORDER BY ticketid DESC', array($request->get('record')));
        if (0 < $adb->num_rows($res)) {
            while ($row = $adb->fetchByAssoc($res)) {
                $result[] = array('id' => $row['ticketid']);
            }
        }

        $response->setResult($result);
        $response->emit();
    }

 

    public function getLastId(Vtiger_Request $request)
    {
        global $adb;
        $res = $adb->pquery('SELECT ticketid FROM vtiger_troubletickets ORDER BY ticketid DESC LIMIT 1');
        $ticketid=$adb->query_result($res,0,'ticketid');
        $response = new Vtiger_Response();
        $response->setResult(array('id' => $ticketid));
        $response->emit();

    }

}

?>