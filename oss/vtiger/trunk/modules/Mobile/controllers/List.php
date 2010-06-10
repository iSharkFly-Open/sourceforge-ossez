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

$smarty = new vtigerCRM_Smarty();

$moduleInstance = Mobile_Core_Module::getInstance(vtlib_purify($_REQUEST['module']));
$pagingInstance = Mobile_Core_Paging::getInstance(vtlib_purify($_REQUEST['page']));

$q = '';
if(isset($_REQUEST['q'])) {
	$q = vtlib_purify($_REQUEST['q']);
}

$smarty->assign('_MODULE', $moduleInstance);
$smarty->assign('_PAGER', $pagingInstance);

if($q === '') {
	$smarty->assign('_RECORDS', Mobile_Core_Search::entity($moduleInstance, $pagingInstance));
	$smarty->assign('_SEARCH_Q', '');
} else {
	$smarty->assign('_RECORDS', 
		Mobile_Core_Search::query($moduleInstance, $q,
			Mobile_Core_Session::get(Mobile_Core_Search::sessionkey($moduleInstance)),
			$pagingInstance
		)
	);
}
$smarty->assign('_SEARCH_Q', $q);

$smarty->assign('_MODE', vtlib_purify($_REQUEST['mode']));

$smarty->display(Mobile::templatePath('List.tpl'));;

?>