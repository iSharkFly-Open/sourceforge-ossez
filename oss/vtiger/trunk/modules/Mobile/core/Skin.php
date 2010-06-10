<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class Mobile_Core_Skin {
	
	const DEFAULT_SKIN_NAME = 'default.css';
	
	static function selected() {
		return Mobile_Core_Session::get('skin.selected', self::DEFAULT_SKIN_NAME);
	}
	
	static function listAll() {
		
		$skins = array();
		
		$dh = opendir(dirname(__FILE__). '/../resources/skins');
		while($filename = readdir($dh)) {
			if(preg_match("/(.*)\.css$/i", $filename, $m)) {
				$skintitle = ucfirst($m[1]);
				$skins[$filename] = $skintitle;
			}
		}
		closedir($dh);
		return $skins;
	}
}
?>