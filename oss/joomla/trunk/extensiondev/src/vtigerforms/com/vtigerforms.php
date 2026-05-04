<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
defined('_JEXEC') or die('Restricted access');

// Collect the input that needs to be sent to vtiger CRM Webforms
$vt_parameters = array();
foreach($_REQUEST as $k=>$v) {
	if(preg_match("/vt_(.*)/", $k, $matches)) {
		$vt_parameters[$matches[1]] = $v;
	}
}

// To get the configured vtiger CRM URL
jimport('joomla.application.module.helper');
$module = JModuleHelper::getModule('vtigerforms');
$params = new JParameter($module->params);

include_once dirname(__FILE__) . '/vtigerforms_helper.php';
$vt_result = vtiger_forms_transmit_to_webforms($params->get('vtigerurl'), 'Leads', $vt_parameters);

// Send the response code.
$response_code = 'com_vtigerforms_RESP:SUCCESS';
if($vt_result) {
	if(preg_match("/Error Code:/",$vt_result)) {
		$response_code = 'com_vtigerforms_RESP:ERROR';
	}
}
echo $response_code;
// Terminate the flow to send only our component message.
exit;

?>
