<?php
# @version $Id: modules/mod_apoll/helper.php
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
defined('_JEXEC') or die('Restricted access');

class modApollHelper
{

	function getApollOptions($apoll_id)
	{
		$db	=& JFactory::getDBO();

		$query = "SELECT o.id, o.text, o.ordering" .
			" FROM ".$db->nameQuote('#__apoll_options') . " AS o " .
			" WHERE o.apoll_id = " . (int) $apoll_id .
			" AND o.text <> ''" .
			" ORDER BY o.ordering"
			;
		
		$db->setQuery($query);

		if (!($options = $db->loadObjectList())) {
			echo "helper ".$db->stderr();
			return;
		}

		return $options;
	}
	// checks if user has voted (if cookie is set)
	function alreadyVoted($id) {
	
		global $mainframe;
		
		$cookieName	= JUtility::getHash( $mainframe->getName() . 'apoll' . $id );
		$voted 		= JRequest::getVar( $cookieName, '0', 'COOKIE', 'INT');
		
		return $voted;
	}
	
	function userVoted($user_id, $apoll_id) {
		$db	=& JFactory::getDBO();
		$query = "SELECT date FROM ".$db->nameQuote('#__apoll_votes')
		." WHERE apoll_id=".(int) $apoll_id
		." AND user_id=".(int)$user_id
		; 
		$db->setQuery($query);

		return $userVoted=($db->loadResult())?1:0;	
	}
	
	function ipVoted($apoll_id) {
		$db	=& JFactory::getDBO();
		$ip = $_SERVER['REMOTE_ADDR'];
$query = "SELECT ip FROM ".$db->nameQuote('#__apoll_votes')
		."WHERE apoll_id=".(int) $apoll_id." 
		AND ip = INET_ATON('".$ip."')"
		;
		$db->setQuery($query); 
		
		return $ipVoted=($db->loadResult()) ? 1:0;	
	}
	
	function getResults($apoll_id) {
		
        $db	=& JFactory::getDBO();
		$query = "SELECT o.*, COUNT(v.id) AS hits, 
		(SELECT COUNT(id) FROM ".$db->nameQuote('#__apoll_votes')." WHERE apoll_id=".$apoll_id.") AS votes 
		FROM ".$db->nameQuote('#__apoll_options')." AS o 
		LEFT JOIN  ".$db->nameQuote('#__apoll_votes')." AS v 
		ON (o.id = v.option_id AND v.apoll_id = ".(int)$apoll_id . ")
		WHERE o.apoll_id=".(int)$apoll_id ." 
		AND o.text <> '' 
		GROUP BY o.id 
		ORDER BY o.ordering";
		
		$db->setQuery($query);
		
		return $db->loadObjectList();
	}
    
    function getActivePolls() {
        $db    =& JFactory::getDBO();
        $query = "SELECT id FROM ".$db->nameQuote('#__apoll_polls') .
        " WHERE published = 1";
        $db->setQuery($query);
        if ($ids = $db->loadResultArray()) {
            return $ids;
        } else {
            return false;
        }
    }
	
	function getItemid($apoll_id) {
		
        $component 	=& JComponentHelper::getComponent('com_apoll');
		$menus		=& JApplication::getMenu('site', array());
		$items		= $menus->getItems('componentid', $component->id);
		$match 		= null;
		$itemid		= null;
		
		if (isset($items)) {
			foreach ($items as $item) {
				if ((@$item->query['view'] == 'apoll') && (@$item->query['id'] == $apoll_id)) {
					$itemid = $item->id;
					break;
				}			
			}
		}
		return '&Itemid='.$itemid;
	}
}
?>
