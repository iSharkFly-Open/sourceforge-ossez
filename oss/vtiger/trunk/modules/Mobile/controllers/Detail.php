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

$ws_id = vtlib_purify($_REQUEST['id']);

$smarty = new vtigerCRM_Smarty();
$smarty->assign('ID', $ws_id);

$moduleInstance = Mobile_Core_Module::fromWSID($ws_id);

$smarty->assign('_MODULE', $moduleInstance);
$smarty->assign('_RECORD', Mobile_Core_Search::retrieve($ws_id, $moduleInstance));

$smarty->display(Mobile::templatePath('Detail.tpl'));

?>