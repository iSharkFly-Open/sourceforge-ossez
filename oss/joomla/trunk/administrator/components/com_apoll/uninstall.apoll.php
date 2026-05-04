<?php
# @version $Id: administator/components/com_apoll/uninstall.apoll.php
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

defined( '_JEXEC' ) or die( 'Restricted access' );
function com_uninstall()
{
	$msg	= "";
	$db		=& JFactory::getDBO();
	$query 	= "SELECT " . $db->nameQuote('drop_it') . " FROM " . $db->nameQuote('#__apoll_config');
	$db->setQuery($query);
	if ($db->loadResult()) {
		$query 	= "
		DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_polls') 	. ";
		DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_options')	. ";
		DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_votes') 	. ";
		DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_menu') 	. ";
		DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_config;')
		;
		$db->setQuery($query);
		if (!$db->queryBatch()) {
			$db->stderr();
		} else {
			$msg = "Apoll database has been successfully dropped.";
		}
	} else {
		$msg = "Apoll database has not been dropped.";
	}
	
	$query 	= "DELETE FROM " . $db->nameQuote('#__apoll_config');
	$db->setQuery($query);  
	$db->query();
  
  ?>
  
  <div class="header"><?php echo JText::_("The Apoll component is now removed from your system.  We're sorry to see you go!"); ?></div>
  <?php 
  echo "<p>".JText::_($msg)."</p>";
}
?>