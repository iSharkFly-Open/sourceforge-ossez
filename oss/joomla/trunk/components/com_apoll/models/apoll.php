<?php
# @version $Id: components/com_apoll/models/apoll.php
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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

/**
* @package		Joomla
* @subpackage	Polls
*/
class ApollModelApoll extends JModel
{
	/**
	 * Add vote
	 * @param int The id of the poll
	 * @param int The id of the option selected
	 */
	function vote( $apoll_id, $option_id )
	{
		global $mainframe;
		$db = $this->getDBO();
		$apoll_id	= (int) $apoll_id;
		$option_id	= (int) $option_id;
		
		$date = &JFactory::getDate();
		$date->setOffset($mainframe->getCfg('offset'));
		$ip = $_SERVER['REMOTE_ADDR'];
		$user =& JFactory::getUser();
		
		$query = "INSERT INTO ".$db->nameQuote('#__apoll_votes')."
			SET date = ".$db->Quote($date->toFormat()).", 
			option_id = ".(int) $option_id.", 
			apoll_id = ".(int) $apoll_id.", 
			ip = INET_ATON('".$ip."')".", 
			user_id =".$user->id;
			
		//Save the vote to the database
		$db->setQuery( $query );
		if(!$db->query()) {
			$msg = $db->stderr();
			$tom = "error";
		} 
        return true;
	}
    function getOptions() {
        $db = $this->getDBO();
        $apoll_id = JRequest::getInt('id', 0);

    	$query = "SELECT o.*, COUNT(v.id) AS hits,
    	(SELECT COUNT(id) FROM ".$db->nameQuote('#__apoll_votes')." WHERE apoll_id=".$apoll_id.") AS voters"
    	." FROM  ".$db->nameQuote('#__apoll_options')." AS o"
    	." LEFT JOIN  ".$db->nameQuote('#__apoll_votes')." AS v"
    	." ON (o.id = v.option_id AND v.apoll_id = " . $apoll_id . ")"
    	." WHERE o.apoll_id = ". $apoll_id
    	." AND o.text <> ''"
    	." GROUP BY o.id "
    	." ORDER BY o.ordering "
    	;

		$db->setQuery( $query );
		if($votes = $db->loadObjectList()) {
		  return $votes;
		} else {
		  return $db->stderr();
		}

    }

    function getApolls() {
        $db = $this->getDBO();

        $query = "SELECT id, title, CASE WHEN CHAR_LENGTH(alias) THEN CONCAT_WS(':', id, alias) ELSE id END AS slug
			FROM ".$db->nameQuote('#__apoll_polls')."
			WHERE published = 1
			ORDER BY id";

		$db->setQuery( $query );

		if($pList = $db->loadObjectList()) {
		  return $pList;
		} else {
		  return $db->stderr();
		}
    }
}
?>