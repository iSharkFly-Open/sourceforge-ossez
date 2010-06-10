<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Mobile_Core_Block {
	
	function __construct() {
		
	}
	
	static function groupFields($moduleName) {
		global $adb;
		$result = $adb->pquery("
			SELECT blocklabel, fieldname FROM vtiger_field INNER JOIN vtiger_blocks WHERE
			vtiger_field.block = vtiger_blocks.blockid AND vtiger_field.tabid = ? 
			ORDER BY vtiger_blocks.sequence, vtiger_field.sequence", array(getTabid($moduleName)));
		
		$blockmap = array();
		
		if(!empty($result)) {
			while($resultrow = $adb->fetch_array($result)) {
				$blocklabel = Mobile::getTranslation($resultrow['blocklabel'], $moduleName);
				$blockmap[$blocklabel][] = $resultrow['fieldname'];
			}
		}
		return $blockmap;
		
	}
}
?>