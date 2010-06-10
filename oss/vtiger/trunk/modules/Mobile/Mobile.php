<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include_once dirname(__FILE__) . '/Mobile.Config.php';

class Mobile {
	
	const SESSION_LOGIN_USER = 'SESSION_LOGIN_USER';
	const SESSION_LOGIN_USERID = 'authenticated_user_id';
	
	/**
	 * Detect if request is from IPhone
	 */
	static function isSafari() {
		if(isset($_SERVER['HTTP_USER_AGENT'])) {
			$ua = $_SERVER['HTTP_USER_AGENT'];
			if(preg_match("/safari/i", $ua)) return true;
		}
		return false;
	}
	
	static function templatePath($filename) {
		return vtlib_getModuleTemplate('Mobile',"generic/$filename");
	}
	
	static function getTranslation($string, $module = '') {
		if($module == 'Events') $module = 'Calendar';
		else if($module == 'Currency') $module = 'Settings';
		
		return getTranslatedString($string, $module);
	}
	
	static function currentUserInstance() {
		$current_user = CRMEntity::getInstance('Users');
		$current_user_id = Mobile::currentUserId();

		if(!empty($current_user_id)) {
			$current_user->retrieveCurrentUserInfoFromFile($current_user_id,"Users");
		}
		return $current_user;
	}
	
	static function currentUserName() {
		if(isset($_SESSION)) {
			return $_SESSION[self::SESSION_LOGIN_USER];
		}
	}
	
	static function currentUserId() {
		if(isset($_SESSION)) {
			return $_SESSION[self::SESSION_LOGIN_USERID];
		}
	}
	
	static function config($key, $defvalue = false) {
		// Defined in the configuration file
		global $Module_Mobile_Configuration;
		if(isset($Module_Mobile_Configuration) && isset($Module_Mobile_Configuration[$key])) {
			return $Module_Mobile_Configuration[$key];
		}
		returN $defvalue;
	}
	
	static function authenticate($username, $password, $updateInSession = false) {
		$userfocus = CRMEntity::getInstance('Users');
		$userfocus->column_fields['user_name'] = $username;
		$authsuccess = $userfocus->doLogin($password);
		if($updateInSession) {
			$_SESSION[Mobile::SESSION_LOGIN_USER] = $username;
			$_SESSION[self::SESSION_LOGIN_USERID] = $userfocus->retrieve_user_id($username);
		}
		return $authsuccess;
	}
}
?>
