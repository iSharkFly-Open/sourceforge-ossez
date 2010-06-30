<?php
/**
* @version $Id: install.php 3136 2007-12-30 17:41:20Z Sigrid Suski $
* @package: Sigsiu Online Business Index 2
* @subpackage download plugin
* ===================================================
* @author
* Name: Sigrid & Radek Suski, Sigsiu.NET
* Email: sobi@sigsiu.net
* Url: http://www.sigsiu.net
* ===================================================
* @copyright Copyright (C) 2007 Sigsiu.NET (http://www.sigsiu.net). All rights reserved.
* @license see http://www.gnu.org/copyleft/gpl.html GNU/GPL.
* SOBI2 Download Plugin is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation.
*/
	defined( '_SOBI2_' ) || ( trigger_error("Restricted access", E_USER_ERROR) && exit() );
	if(defined("_SOBI_ADM_PATH")) {
		$installPath = _SOBI_ADM_PATH.DS."includes".DS."install".DS."download";
		require_once(_SOBI_CMSROOT.DS."administrator".DS."includes".DS."pcl".DS."pclzip.lib.php");
		$zipfile = new PclZip($installPath.DS."mimetypes.zip");
		if(!$zipfile->extract(PCLZIP_OPT_PATH, _SOBI_FE_PATH.DS."plugins".DS."download".DS)) {
			trigger_error("Could not extract mimetypes icons");
		}
	}
	else {
		$url = "index2.php?option=com_sobi2&task=pluginsManager&mosmsg=".urlencode("The download plugin requires at least SOBI2 RC 2.8.0. Please uninstall this plugin and update your SOBI2 version");
		@ob_end_clean();
		header( 'HTTP/1.1 301 Moved Permanently' );
		header( "Location: ". $url );
		exit();
	}
?>