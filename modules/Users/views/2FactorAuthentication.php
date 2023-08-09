<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
require_once 'vtlib/Vtiger/Mailer.php';

class Users_2FactorAuthentication_View extends Vtiger_Index_View {

	public function requiresPermission(\Vtiger_Request $request) {
		return array();
	}
    
    public function preProcess(Vtiger_Request $request, $display=true) {
		return true;
	}

	public function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$viewer = $this->getViewer($request);
		$userModel = Users_Record_Model::getCurrentUserModel();
		
		$viewer->assign('CURRENT_USER_MODEL',$userModel);
		$viewer->assign('MODULE', $moduleName);	
		$viewer->assign('USER_ID', $request->get('record'));		
		$viewer->assign('EMAIL', $userModel->getEmail($userModel->getId()));		
		$viewer->assign('ERROR', $request->get('error'));
		$checkifhasauthetication = $userModel->checkifhasauthentication($userModel->getId());
		if($checkifhasauthetication && $request->get('error') == ""){
			$this->sendEmail($userModel);
		}
		
		$viewer->view('2FactorAuthentication.tpl', $moduleName);
	}

	function postProcess(Vtiger_Request $request) {
		return true;
	}

	function sendEmail($userModel){
			$authenticationcode = $this->generateRandomString();
		
			$content = "Hi,<br><br> 
						
						Good on you for keep your account secure.
						Here's your authentication code:
						<br>
						<h3>$authenticationcode</h3>
						<br><br>
						<b>What to do if you didn't request this email</b><br>
						This email is sent automatically when you log into your BAYAN911 account.
						If you haven't logged in recently, someone else might be trying to access your account.
						<br><br>
						Please contact use immediately so we can make sure your data is safe. <br>
						(02) 7729-0703 / (02) 8812-5206 / info@microbizone.com						
						<br><br><br> 
						Regards,<br> 
						BAYAN911 Team<br>";
						
			$subject = 'BAYAN911 - 2 Factor Authentication Code';
			$mail = new Vtiger_Mailer();
			$mail->IsHTML();
			$mail->Body = $content;
			$mail->Subject = $subject;
			$user_email = $userModel->getEmail($userModel->getId());
			$mail->AddAddress($user_email);
			$status = $mail->Send(true);
			
			if ($status === 1 || $status === true) {
				$userModel->saveAuthenticationCode($userModel->getId(), $authenticationcode);	
				return true;						
			} else {
				header('Location: index.php?module=Users&action=Logout');
			}
			return false;
	}

	function generateRandomString() {
		$length = 10;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return strtoupper($randomString);
	}


}
