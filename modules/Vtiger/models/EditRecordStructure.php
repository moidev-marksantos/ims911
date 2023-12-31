<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/**
 * Vtiger Edit View Record Structure Model
 */
class Vtiger_EditRecordStructure_Model extends Vtiger_RecordStructure_Model {

	/**
	 * Function to get the values in stuctured format
	 * @return <array> - values in structure array('block'=>array(fieldinfo));
	 */
	public function getStructure() {
		if(!empty($this->structuredValues)) {
			return $this->structuredValues;
		}

		$values = array();
		$recordModel = $this->getRecord();
		$recordId = $recordModel->getId();
		$moduleModel = $this->getModule();
		$blockModelList = $moduleModel->getBlocks();
		foreach($blockModelList as $blockLabel=>$blockModel) {
			$fieldModelList = $blockModel->getFields();
			if (!empty ($fieldModelList)) {
				$values[$blockLabel] = array();
				foreach($fieldModelList as $fieldName=>$fieldModel) {
					if($fieldModel->isEditable()) {
						
						if($recordModel->get($fieldName) != '') {
							$fieldModel->set('fieldvalue', $recordModel->get($fieldName));
						}else{
							$defaultValue = $fieldModel->getDefaultFieldValue();
							if(!empty($defaultValue) && !$recordId)
								$fieldModel->set('fieldvalue', $defaultValue);
						}
						$values[$blockLabel][$fieldName] = $fieldModel;
                        if ($fieldName == 'taxclass' && count($recordModel->getTaxClassDetails()) < 1) {
                            unset($values[$blockLabel][$fieldName]);
                        }
						
						if ($fieldName == 'cf_989') {
							if($recordModel->get('cf_989') == '') {
								$date_today = date("Y-m-d");
								$fieldModel->set('fieldvalue', $date_today);
							}
                        }
						// if ($fieldName == 'cf_991') {
							// if($recordModel->get('cf_991') == '') {
								// $time_today = date("h:i A");
								// $fieldModel->set('fieldvalue', $time_today);
							// }
                        // }
					}
				}
			}
		}
		$this->structuredValues = $values;
		return $values;
	}
}