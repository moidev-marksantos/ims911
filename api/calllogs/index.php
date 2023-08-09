<?php

header('Content-Type: application/json');
$ServerURL = "172.16.1.110:5001";

$LoginCreds = new stdClass();

$LoginCreds->username = "admin";
$LoginCreds->password = "Admin123$$%";

// $LoginCreds->username = "1001";
// $LoginCreds->password = "eM1H6PzEGK";

function Get3CXCookie()
{

    global $ServerURL, $LoginCreds;

    $UserDetails = json_encode($LoginCreds);

    $PostData        =    file_get_contents("https://" . $ServerURL . "/api/login", false, stream_context_create(array(
        'http' => array(
            'protocol_version'    =>    '1.1',
            'user_agent'          =>    'PHP',
            'method'              =>    'POST',
            'header'              =>    'Content-type: application/json\r\n' .
                'User-Agent: PHP\r\n' .
                'Connection: close\r\n' .
                'Content-length: ' . strlen($UserDetails) . '',
            'content'            =>    $UserDetails,
        ),
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false
		)
    )));

    $TempCookie  = explode("; ", $http_response_header[9]);
    $FinalCookie = substr($TempCookie[0], 12);

    if ($PostData == "AuthSuccess")
        return $FinalCookie;

    return null;
}


function GetAPIData($API, $AuthCookie, $Parameter)
{
    global $ServerURL;
    $GetData = file_get_contents("https://" . $ServerURL . "/api/" . $API. "/?" . $Parameter, false, stream_context_create(array(
        'http' => array(
            'protocol_version'    =>    '1.1',
            'user-agent'          =>    'PHP',
            'method'              =>    'GET',
            'header'              =>    'Cookie: ' . $AuthCookie . ''
        ),
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false
		)
    )));

    return $GetData;
}

$Auth3CX = Get3CXCookie();

//print_r($Auth3CX);

if(strlen($Auth3CX) != 0 )
{
    ### GET ACTIVE CALLS
    //$DisplayActiveCallsAPI = GetAPIData( "ActiveCalls", $Auth3CX , "");    
    //echo json_encode( json_decode( $DisplayActiveCallsAPI ), JSON_PRETTY_PRINT );

    ### GET CALL LOGS    
    $calllogs = GetAPIData("CallLog", $Auth3CX, "TimeZoneName=Asia%2FManila&callState=All&dateRangeType=Today&fromFilter=&fromFilterType=Any&numberOfRows=50&searchFilter=&startRow=0&toFilter=&toFilterType=Any");
    
	$results = (json_decode($calllogs));
	//print_r($results);
    //$results->CallLogRows[0]->CallTime
	chdir('../../');

	include_once 'includes/main/WebUI.php';
	include_once 'include/Webservices/Create.php';

	$user = CRMEntity::getInstance('Users');
	$user->id = $user->getActiveAdminId();
	$user->retrieve_entity_info($user->id, 'Users');
	
	foreach($results->CallLogRows as $calls) {
		//echo $calls->CallTime;
		
		$calllogs_tks_dateandtime = $calls->CallTime;
		$calllogs_tks_fromno = $calls->CallerId;
		$calllogs_tks_tono = $calls->Destination;
		$calllogs_tks_duration = $calls->Duration;
		
		$callss =  $adb->pquery("SELECT count(*) as cnt FROM vtiger_calllogs LEFT JOIN vtiger_crmentity ON vtiger_calllogs.calllogsid = vtiger_crmentity.crmid WHERE deleted != 1 AND calllogs_tks_dateandtime = ? AND calllogs_tks_fromno = ? AND calllogs_tks_tono = ? AND calllogs_tks_duration = ?",  array(
			$calllogs_tks_dateandtime,
			$calllogs_tks_fromno,
			$calllogs_tks_tono,
			$calllogs_tks_duration
		));
		
		//echo $adb->query_result($callss, 0, "cnt");
		if($adb->query_result($callss, 0, "cnt") == 0) {
			
			$_calllogs['calllogs_tks_dateandtime'] = date('m/d/Y h:i:s A', strtotime($calllogs_tks_dateandtime));
			$_calllogs['calllogs_tks_fromno'] = $calllogs_tks_fromno;
			$_calllogs['calllogs_tks_tono'] = $calllogs_tks_tono;
			$_calllogs['calllogs_tks_duration'] = $calllogs_tks_duration == '00:00:00' ? 'Not Answered' :  $calllogs_tks_duration;
			$_calllogs['assigned_user_id'] = 1;
			$_calllogs['source'] = '3CX';
			$record = vtws_create('Calllogs', $_calllogs, $user);
			echo $calllogs_tks_tono . PHP_EOL;
			//print_r($record);
		}
		
	}
    ### GET SERVICE LIST
    // $DisplayServiceListAPI = GetAPIData("ServiceList", $Auth3CX , "");
    // echo json_encode( json_decode( $DisplayServiceListAPI ), JSON_PRETTY_PRINT );
  
}
else
{
    echo "Authentication failed";
}