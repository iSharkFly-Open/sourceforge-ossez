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

$mode = vtlib_purify($_REQUEST['mode']);

$moduleInstance = Mobile_Core_Module::getInstance(vtlib_purify($_REQUEST['module']));

if($mode == 'update') {
	$fieldnames = array();
	
	foreach($_REQUEST as $k=>$v) {
		if(preg_match("/field_(.*)/i", $k, $m)) {
			$fieldnames[] = vtlib_purify($m[1]);
		}
	}
	
	Mobile_Core_Session::put(Mobile_Core_Search::sessionkey($moduleInstance), $fieldnames);
	
	header("Location: index.php?action=List&module={$moduleInstance->name}&mode=search");
	
} else {
	
	$searchfields = Mobile_Core_Session::get(Mobile_Core_Search::sessionkey($moduleInstance));
	if($searchfields === false) {
		$searchfields = $moduleInstance->fieldnames();
	}
	
	$smarty = new vtigerCRM_Smarty();
	$smarty->assign('_MODULE', $moduleInstance);
	$smarty->assign("_SEARCHIN", $searchfields);
	$smarty->display(Mobile::templatePath('SearchConfig.tpl'));
}

?>