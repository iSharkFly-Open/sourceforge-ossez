<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once 'include/Webservices/Utils.php';

include_once dirname(__FILE__) . '/Session.php';
include_once dirname(__FILE__) . '/Cache.php';
include_once dirname(__FILE__) . '/Skin.php';
include_once dirname(__FILE__) . '/Module.php';

class MobileService {
	
	static function setupGlobals() {
		global $current_user;
		if(!isset($current_user)) { 
			$current_user = Mobile::currentUserInstance();
		}
		
		global $current_language;
		if(!isset($current_language)) {
			$current_language = 'en_us';
			
			global $app_currency_strings, $app_strings, $app_list_strings;
			
			$app_currency_strings = return_app_currency_strings_language($current_language);
			$app_strings = return_application_language($current_language);
			$app_list_strings = return_app_list_strings_language($current_language);
		}
	}
	
	static function currentUser() {
		global $current_user;
		return $current_user;
	}	
}
?>