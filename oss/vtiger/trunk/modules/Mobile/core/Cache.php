<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Mobile_Core_Cache {
	
	function __construct() {
		
	}
	
	static function isEnabled() {
		return Mobile::config('Cache.Info', false);
	}
	
	static function get($key) {
		return Mobile_Core_Session::get($key);
	}
	
	static function put($key, $value) {
		return Mobile_Core_Session::put($key, $value);
	}
	
}
?>