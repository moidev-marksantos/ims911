<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the 
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
********************************************************************************/

// Adjust error_reporting favourable to deployment.
version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & E_ERROR) : error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED  & E_ERROR & ~E_STRICT); // PRODUCTION
//ini_set('display_errors','on'); version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);   // DEBUGGING
//ini_set('display_errors','on'); error_reporting(E_ALL); // STRICT DEVELOPMENT


include('vtigerversion.php');

// more than 8MB memory needed for graphics
// memory limit default value = 64M
ini_set('memory_limit','512M');

// show or hide calendar, world clock, calculator, chat and CKEditor 
// Do NOT remove the quotes if you set these to false! 
$CALENDAR_DISPLAY = 'true';
$USE_RTE = 'true';

// helpdesk support email id and support name (Example: 'support@vtiger.com' and 'vtiger support')
$HELPDESK_SUPPORT_EMAIL_ID = 'information.bayan911@gmail.com';
$HELPDESK_SUPPORT_NAME = 'Bayan911';
$HELPDESK_SUPPORT_EMAIL_REPLY_ID = $HELPDESK_SUPPORT_EMAIL_ID;

/* database configuration
      db_server
      db_port
      db_hostname
      db_username
      db_password
      db_name
*/

$dbconfig['db_server'] = 'localhost';
$dbconfig['db_port'] = ':3306';
$dbconfig['db_username'] = 'root';
$dbconfig['db_password'] = 'KL9KW7]5o-0iRfwQ';
$dbconfig['db_name'] = 'sbmaserver';
$dbconfig['db_type'] = 'mysqli';
$dbconfig['db_status'] = 'true';

// TODO: test if port is empty
// TODO: set db_hostname dependending on db_type
$dbconfig['db_hostname'] = $dbconfig['db_server'].$dbconfig['db_port'];

// log_sql default value = false
$dbconfig['log_sql'] = false;

// persistent default value = true
$dbconfigoption['persistent'] = true;

// autofree default value = false
$dbconfigoption['autofree'] = false;

// debug default value = 0
$dbconfigoption['debug'] = 0;

// seqname_format default value = '%s_seq'
$dbconfigoption['seqname_format'] = '%s_seq';

// portability default value = 0
$dbconfigoption['portability'] = 0;

// ssl default value = false
$dbconfigoption['ssl'] = false;

$host_name = $dbconfig['db_hostname'];


if($_SERVER['REMOTE_ADDR'] === '122.52.231.165'){
	$site_URL = 'http://124.105.63.203:8080/'; //FIRE
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '124.105.63.215'){
	$site_URL = 'http://124.105.63.203:8080/'; //LED
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '136.158.34.185'){
	$site_URL = 'http://124.105.63.203:8080/'; //MAM JESSI
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '122.54.94.190'){
	$site_URL = 'http://124.105.63.203:8080/'; //MICROBIZ
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '122.52.231.159'){
	$site_URL = 'http://124.105.63.203:8080/'; //PUBLIC HEALTH
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '124.105.63.203'){
	$site_URL = 'http://124.105.63.203:8080/'; //COMMAND CENTER
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '130.105.224.127'){
	$site_URL = 'http://124.105.63.203:8080/'; //COMMAND CENTER
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '130.105.215.172'){
	$site_URL = 'http://124.105.63.203:8080/'; //SIR ANTHONY
}
elseif ($_SERVER['REMOTE_ADDR'] ===  '172.16.1.101'){
        $site_URL = 'http://172.16.1.111:8080/'; //wokrstation1
}
elseif ($_SERVER['REMOTE_ADDR'] === '172.16.1.102'){
        $site_URL = 'http://172.16.1.111:8080/'; //wokrstation2
}
elseif ($_SERVER['REMOTE_ADDR'] === '172.16.1.103'){
        $site_URL = 'http://172.16.1.111:8080/'; //wokrstation3
}
else{
	$site_URL = 'http://124.105.63.203:8080/'; //COMMAND CENTER
}

// else{
	// $site_URL = 'http://172.16.1.111:8080/';
// }
//$site_URL = 'http://124.105.63.203:8080/';

$PORTAL_URL = $site_URL.'/customerportal';
// root directory path
$root_directory = '/opt/lampp/htdocs/bayan911/';

// cache direcory path
$cache_dir = 'cache/';

// tmp_dir default value prepended by cache_dir = images/
$tmp_dir = 'cache/images/';

// import_dir default value prepended by cache_dir = import/
$import_dir = 'cache/import/';

// upload_dir default value prepended by cache_dir = upload/
$upload_dir = 'cache/upload/';

// maximum file size for uploaded files in bytes also used when uploading import files
// upload_maxsize default value = 3000000
$upload_maxsize = 62914560; //60MB

// flag to allow export functionality
// 'all' to allow anyone to use exports 
// 'admin' to only allow admins to export 
// 'none' to block exports completely 
// allow_exports default value = all
$allow_exports = 'all';

// files with one of these extensions will have '.txt' appended to their filename on upload
// upload_badext default value = php, php3, php4, php5, pl, cgi, py, asp, cfm, js, vbs, html, htm
$upload_badext = array('php', 'php3', 'php4', 'php5', 'pl', 'cgi', 'py', 'asp', 'cfm', 'js', 'vbs', 'html', 'htm', 'exe', 'bin', 'bat', 'sh', 'dll', 'phps', 'phtml', 'xhtml', 'rb', 'msi', 'jsp', 'shtml', 'sth', 'shtm');

// list_max_entries_per_page default value = 20
$list_max_entries_per_page = '40';

// history_max_viewed default value = 5
$history_max_viewed = '5';

// default_action default value = index
$default_action = 'index';

// set default theme
// default_theme default value = blue
$default_theme = 'softed';

// default text that is placed initially in the login form for user name
// no default_user_name default value
$default_user_name = '';

// default text that is placed initially in the login form for password
// no default_password default value
$default_password = '';

// create user with default username and password
// create_default_user default value = false
$create_default_user = false;

//Master currency name
$currency_name = 'Philippines, Pesos';

// default charset
// default charset default value = 'UTF-8' or 'ISO-8859-1'
$default_charset = 'UTF-8';

// default language
// default_language default value = en_us
$default_language = 'en_us';

//Option to hide empty home blocks if no entries.
$display_empty_home_blocks = false;

//Disable Stat Tracking of vtiger CRM instance
$disable_stats_tracking = false;

// Generating Unique Application Key
$application_unique_key = 'YZSYCQDVw5iaQhv249D4qzE6PhYEbK';

// trim descriptions, titles in listviews to this value
$listview_max_textlength = '20';

// Maximum time limit for PHP script execution (in seconds)
$php_max_execution_time = 0;

// Set the default timezone as per your preference
$default_timezone = 'Asia/Kuala_Lumpur';

/** If timezone is configured, try to set it */
if(isset($default_timezone) && function_exists('date_default_timezone_set')) {
	@date_default_timezone_set($default_timezone);
}

//Set the default layout 
$default_layout = 'v7';

//Set the token
$mapbox_token = 'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';
$facebook_token = 'EAAMjqAyQbvcBAJErYWiJVI7qCAvytqYiFyLEy9ocdOWvkE4VUmHMfG5bIPYjpr3QPW1ttRiCsNlohepsfvpu5SEhDonTewTqxOI3bah7PysREDKX2hBSYMyr1d4XHSQCsXrhPCrGXrn2YEwTc9twnaRdWx4algR5wZBgPwClvPqWUKOcYnwIIPNwwH6uLNnw1w5ecLAZDZD';

$viber_auth_token = '4cc760508667d346-f88010c9f98c7087-f9428db5f4edee68';
$viber_sender_name = 'SupportMicrobiz';
$viber_sender_avatar = 'https://media-direct.cdn.viber.com/pg_download?pgtp=icons&dlid=0-04-08-d379e7d9855576a2199572b25d0e23a57a9377d963ebb3655eb1a3a4c8967315&fltp=jpg&imsz=0000';

$responder_limit = 20;
$user_limit = 20;
include_once 'config.security.php';
?>
