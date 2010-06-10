<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
if(!defined('VTIGER_MODULES_MOBILE')) { die ('Direct access to file is restricted!'); }

if(isset($_REQUEST['username'])) {

	if(Mobile::authenticate($_REQUEST['username'], $_REQUEST['password'], true)) {
		header('Location: index.php?action=Home');
		exit;
	}
} 

$smarty = new vtigerCRM_Smarty();
$smarty->assign('TITLE', 'vtiger CRM Mobile');

if(isset($_REQUEST['username'])) $smarty->assign("_ERR", "Login failed! Try again...");

$smarty->display(Mobile::templatePath('Login.tpl'));


?>