<?php
# @version $Id: administator/components/com_apoll/install.apoll.php
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
function com_install()
{
	$msg = "";
	$db 	=& JFactory::getDBO();

	//Check if we are updating the component from version 1.2 to 2.0
	//If table #__apolls exists import the polls
 	if (in_array($db->getPrefix().'apolls', $db->getTableList())) {

		//import the apolls table
		$query = "INSERT INTO " . $db->nameQuote('#__apoll_polls') . " (id, title, alias, checked_out, checked_out_time, published, params, access, lag) SELECT id, title, alias, checked_out, checked_out_time, 0, params, access, lag/60 FROM " . $db->nameQuote('#__apolls') . ";"; 
		
		$db->setQuery($query);
		if(!$db->query()) {
			$msg .= "<br />".$db->getErrorMsg();
		} else {
			$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Polls from version 1.2 successfully imported')."</h3>";
		}
		

		//copy the options table
		$query = "INSERT INTO " . $db->nameQuote('#__apoll_options') . " (id, apoll_id, text, color, ordering) SELECT id, apollid, text, color, ordering FROM " . $db->nameQuote('#__apoll_data') . " WHERE text <> '';";
		
		$db->setQuery( $query );
		if(!$db->query()) {
			$msg .= "<br />".$db->getErrorMsg();
		} else {
			$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Poll options from version 1.2 successfully imported')."</h3>";
		}
		
		//copy the votes table
		$query = "INSERT INTO " . $db->nameQuote('#__apoll_votes') . " (id, date, option_id, apoll_id) SELECT id, date, vote_id, apoll_id FROM " . $db->nameQuote('#__apoll_date') . ";";
		
		$db->setQuery( $query );
		if(!$db->query()) {
			$msg .= "<br />".$db->getErrorMsg();
		} else {
			$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Recorded votes from version 1.2 successfully imported')."</h3>";
		}		
		
		// Find out Apoll component unique id
		$query = "SELECT id FROM " . $db->nameQuote('#__components') . " WHERE link = " . $db->Quote('option=com_apoll');
		$db->setQuery($query);
		$component_id = $db->loadResult();
		
		$query = "
		UPDATE " . $db->nameQuote('#__components') . " SET admin_menu_img = '../media/system/images/apoll.png' WHERE id = $component_id;
		INSERT INTO " . $db->nameQuote('#__components') . " VALUES 
		(null, 'Polls', '', 0, $component_id, 'option=com_apoll', 'Polls', 'com_apoll', 0, '', 0, '', 1), 
		(null, 'Votes', '', 0, $component_id, 'option=com_apoll&task=view&view=votes', 'Votes', 'com_apoll', 1, '', 0, '', 1), 
		(null, 'Configuration', '', 0, $component_id, 'option=com_apoll&task=view&view=config', 'Configuration', 'com_apoll', 2, '', 0, '', 1) 
		";
		$db->setQuery( $query );
		if(!$db->queryBatch()) {
			$msg .= "<br />".$db->getErrorMsg();
		} else {
			$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Apoll admin menu successfully updated')."</h3>";
		}
		
		//Drop old tables
		$db->setQuery("
		DROP TABLE ". $db->nameQuote('#__apolls') . "; 
		DROP TABLE ". $db->nameQuote('#__apoll_data') ."; 
		DROP TABLE ". $db->nameQuote('#__apoll_date').";
		");
		if(!$db->queryBatch()) {
			$msg .= "<br />".$db->getErrorMsg();
		} else {
			$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Version 1.2 tables dropped')."</h3>";
		}
	}	 
	
	// Change database apoll_votes' field vote_id to option_id.
	$table = $db->getPrefix().'apoll_votes';
	$fields = $db->getTableFields($table);
	
	if(array_key_exists('vote_id', $fields[$table])) {

		$db->setQuery("ALTER TABLE ". $db->nameQuote('#__apoll_votes') . " CHANGE ". $db->nameQuote('vote_id') . "  ". $db->nameQuote('option_id') . " INT(11) NOT NULL DEFAULT '0'");
		if(!$db->query()) {
			$msg .= "ERROR!!! Field apoll_votes.vote_id exitsts. Could not be changed to apoll_votes.option_id. Please rename it manually.<br />".$db->getErrorMsg();
		}
	}
	
	// Drop the #__apoll_menu table. We are getting rid of this table left from joomla 1.0
	$db->setQuery("DROP TABLE IF EXISTS ". $db->nameQuote('#__apoll_menu'));
	if(!$db->query()) {
		$msg .= "<br />".$db->getErrorMsg();
	}
		
	//If Joomfish component is installed import apoll joomfish files
	if (file_exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomfish'.DS.'config.xml'))
		{
			//Deletes older joomfish files
			if (file_exists(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apolls.xml") || file_exists(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_data.xml") || file_exists(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_poll.xml") || file_exists(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_options.xml")) {
				//First files left from Apoll version 1.2
				@unlink(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apolls.xml"); 
				@unlink(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_data.xml");
				//Then check for files left from Apoll version 2.0
				@unlink(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_polls.xml");
				@unlink(JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_options.xml");
			}			
			//copy the files from com_apoll/joomfish to com_joomfish/contentelements and remove dir com_apoll/joomfish
			if ((@rename(JPATH_ADMINISTRATOR.DS."components".DS."com_apoll".DS."joomfish".DS."apoll_polls.xml", JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_polls.xml")) && (@rename(JPATH_ADMINISTRATOR.DS."components".DS."com_apoll".DS."joomfish".DS."apoll_options.xml", JPATH_ADMINISTRATOR.DS."components".DS."com_joomfish".DS."contentelements".DS."apoll_options.xml")) && (@rmdir (JPATH_ADMINISTRATOR.DS."components".DS."com_apoll".DS."joomfish")))	{
				$msg .= "<h3><img src='images/tick.png' style='float:left; margin-right:5px;'>".JText::_('Joomfish component found! Contentelement files were also installed')."</h3>";
				} else {
				$msg .="<h3><img src='images/publish_x.png' style='float:left; margin-right:5px;'>".JText::_('Joomfish component was found, but content element files could not be copied')."</h3>";}
		} 

  ?>
  <div class="header"><?php echo JText::_('Congratulations, Apoll component version 2.0 is successfully installed!'); ?></div>
  <p>
  <br />
  
  <?php echo $msg;  ?>
  </p>  
<?php } ?>
