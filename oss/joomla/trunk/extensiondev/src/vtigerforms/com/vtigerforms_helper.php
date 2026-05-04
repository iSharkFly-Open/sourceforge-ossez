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

include_once dirname(__FILE__) . '/curl_http_client.php';

function vtiger_forms_transmit_to_webforms($vtiger_url, $module, $parameters) {
	if(empty($vtiger_url)) {
		return false;
	}
	// Suffix the URL where data needs to be sent.
	$service_url = $vtiger_url . '/modules/Webforms/post.php';

	$post_data = array();
	foreach($parameters as $param_name=>$param_value) {
		$post_data[$param_name] = $param_value;
	}
	// Just to be on safer side, we are populating it later.
	$post_data['moduleName'] = $module;

	include_once dirname(__FILE__) . '/curl_http_client.php';
	$client = new Curl_HTTP_Client();

	// Escape SSL certificate hostname verification
	curl_setopt($client->ch, CURLOPT_SSL_VERIFYHOST, 0);
	
	$client->set_user_agent("Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
	$html_data = $client->send_post_data($service_url, $post_data);

	return $html_data;
}

?>
