<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Users_2FactorAuthenticationSave_Action extends Users_Save_Action
{


	public function process(Vtiger_Request $request)
	{
		$userRecordModel = Users_Record_Model::getCurrentUserModel();

		$checkauthentication = $userRecordModel->checkAuthenticationCode($userRecordModel->getId(),  $request->get('authenticationcode'));
		if ($checkauthentication) {
			$userRecordModel->deleteAuthenticationCode($userRecordModel->getId(),  $request->get('authenticationcode'));
			header('Location: index.php?module=Users&parent=Settings&view=SystemSetup');
		} else {
			header('Location: index.php?module=Users&parent=Settings&view=2FactorAuthentication&error=1');
		}

		exit();
	}
}
