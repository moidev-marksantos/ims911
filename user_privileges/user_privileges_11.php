<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H4';

$current_user_parent_role_seq='H1::H2::H3::H4';

$current_user_profiles=array(3,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>1,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'31'=>0,'32'=>0,'33'=>0,'34'=>0,'35'=>0,'36'=>0,'37'=>0,'38'=>0,'39'=>0,'40'=>0,'41'=>1,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>1,'48'=>0,'49'=>0,'50'=>1,'51'=>0,'52'=>0,'53'=>0,'54'=>0,'55'=>0,'28'=>0,);

$profileActionPermission=array(2=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>1,6=>1,10=>0,),4=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,10=>0,),6=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,10=>0,),7=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,6=>1,),9=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),10=>array(0=>0,1=>0,2=>0,4=>0,),13=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),15=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),18=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),19=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>1,),20=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>0,2=>0,3=>0,4=>0,7=>0,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),34=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,11=>1,12=>1,14=>1,15=>1,),35=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),36=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),42=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,),43=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>1,),44=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),45=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),47=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,),51=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>0,6=>0,8=>0,),52=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,),53=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>0,6=>0,8=>0,),54=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,),55=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,),);

$current_user_groups=array(3,);

$subordinate_roles=array();

$parent_roles=array('H1','H2','H3',);

$subordinate_roles_users=array();

$user_info=array('user_name'=>'call.taker4','is_admin'=>'off','user_password'=>'$2y$10$PwAsZUfFgSAUF7gbY/mLxuPw91rQYjMsZAoJ5QNcOCebYfk41KXo6','confirm_password'=>'$2y$10$UJFrDG4koL7Q9XQyGJ.N3er53K1GWtSD.7koHLv33Txx9X.bkZxDi','first_name'=>'Call','last_name'=>'Taker 4','roleid'=>'H4','email1'=>'call.taker4@sbma.com','status'=>'Inactive','activity_view'=>'Today','lead_view'=>'Last 2 Days','hour_format'=>'24','end_hour'=>'','start_hour'=>'09:00','is_owner'=>'','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'mm-dd-yyyy','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'FR5eGpPjfv0sLYHd','time_zone'=>'Asia/Kuala_Lumpur','currency_id'=>'1','currency_grouping_pattern'=>'12,34,56,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'call-center-agent_(2).png','internal_mailer'=>'0','theme'=>'softed','language'=>'en_us','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Sunday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'','defaultactivitytype'=>'','hidecompletedevents'=>'0','defaultcalendarview'=>'','defaultlandingpage'=>'Home','currency_name'=>'Philippines, Pesos','currency_code'=>'PHP','currency_symbol'=>'Php','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'11');
?>