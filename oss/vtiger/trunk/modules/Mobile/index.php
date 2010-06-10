<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
chdir (dirname(__FILE__) . '/../..');
define ('VTIGER_MODULES_MOBILE', 1);

$currentModule = 'Mobile';

include_once 'vtlib/Vtiger/Utils.php';
include_once 'Smarty_setup.php';

include_once dirname(__FILE__) . '/Mobile.php';
include_once dirname(__FILE__) . '/core/MobileService.php';

@session_start();

$requestedAction = '';

if(isset($_REQUEST['action'])) $requestedAction = vtlib_purify($_REQUEST['action']);

if(isset($_SESSION[Mobile::SESSION_LOGIN_USER]) && !empty($_SESSION[Mobile::SESSION_LOGIN_USER])) {
	if(empty($requestedAction)) $requestedAction = 'Home';
	MobileService::setupGlobals();
} else {
	
	$requestedAction = 'Login';
}

if(!empty($requestedAction)) {
	$delegateToFile  = dirname(__FILE__) . "/controllers/$requestedAction.php";
	checkFileAccess($delegateToFile);
	include_once $delegateToFile;
}
?>
