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
$smarty->assign('TITLE', 'vtiger CRM');

$smarty->assign('_MODULES', Mobile_Core_Module::listAll(true));

$smarty->assign('_ALLSKINS', Mobile_Core_Skin::listAll());
$smarty->assign('_SELSKIN', Mobile_Core_Skin::selected());

$smarty->display(Mobile::templatePath('Home.tpl'));

?>