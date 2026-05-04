<?php
# @version $Id: components/com_apoll/apoll.php
# @package: Apoll Vote
# ===================================================
# @author
# Name: Hristo Genev
# Email: harrygg@gmail.com
# Url: http://www.afactory.org
# ===================================================
# @copyright Copyright (C) 2008 aFactory.org All rights reserved.
# @license see http://www.gnu.org/licenses/lgpl.html GNU/LGPL.
# You can use, redistribute this file and/or modify
# it under the terms of the GNU Lesser General Public License as published by
# the Free Software Foundation.
# License http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL, see LICENSE.php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Set the table directory
JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR.DS.'tables');

// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');

// Require specific controller if requested
if($controller = JRequest::getWord('c')) {
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if (file_exists($path)) {
		require_once $path;
	} else {
		$controller = '';
	}
}

// Create the controller
$classname	= 'ApollController'.ucfirst($controller);
$controller = new $classname( );

// Register Extra tasks
$controller->registerTask( 'results', 'display' );

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

?>