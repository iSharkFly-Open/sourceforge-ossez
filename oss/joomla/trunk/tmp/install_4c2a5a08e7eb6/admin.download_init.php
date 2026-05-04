<?php
/**
* @version $Id: admin.download_init.php 3523 2008-02-21 18:03:54Z Radek Suski $
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
	/*
	 * include class definition
	 */
	if(defined("_SOBI_ADM_PATH")) {
		$config =& adminConfig::getInstance();
		require_once(_SOBI_ADM_PATH.DS."plugins".DS."download".DS."admin.download.class.php");
		if(file_exists(_SOBI_FE_PATH.DS."plugins".DS."download".DS.$config->sobi2Language.".php")) {
			require_once(_SOBI_FE_PATH.DS."plugins".DS."download".DS.$config->sobi2Language.".php");
		}
		else {
			require_once(_SOBI_FE_PATH.DS."plugins".DS."download".DS."english.php");
		}
		/*
		 * create an object
		 */
		$sobi_download_adm = new sobi_download_adm();
		/*
		 * put the object to the plugins array
		 * $plugin->name is definied in sobi2.php
		 */
		$config->S2_plugins[$plugin->name_id] = $sobi_download_adm;
	}
	else {
		if(sobi2Config::request($_REQUEST, "task", null) != "pluginsManager") {
			$url = "index2.php?option=com_sobi2&task=pluginsManager&mosmsg=".urlencode("The download plugin requires at least SOBI2 RC 2.8.0. Please uninstall this plugin or update your SOBI2 version");
			echo "<script>document.location.href='{$url}';</script>\n";
		}
	}
?>
