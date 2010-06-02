<?php
# @file: modules/mod_apoll/mod_apoll.php
# @package: aPoll
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

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$tabclass_arr = array ('sectiontableentry2', 'sectiontableentry1');

$menu 		= &JSite::getMenu();
$items		= $menu->getItems('link', 'index.php?option=com_apoll&view=apoll');
$itemid 	= isset($items[0]) ? '&Itemid='.$items[0]->id : '';
$details 	= "";

$apoll_id 	= $params->get( 'id', 0 );
//if Show random poll is selected
if (!$apoll_id) {
    $ids    = modApollHelper::getActivePolls();
    
    if (count($ids) > 1) {
        $apoll_id = $ids[array_rand($ids)];
    } else {
        $apoll_id = $ids[0];
    }
}

$results  	= modApollHelper::getResults($apoll_id);
//print_r($results); exit; 
//get the component params	
JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_apoll'.DS.'tables');
$apoll =& JTable::getInstance('apoll', 'Table');
$apoll->load( $apoll_id );
$apollParams = new JParameter($apoll->params);
//merge them with the module params
$params->merge($apollParams, $params);

$slug = ($apoll->alias=='')? $apoll->id : $apoll->id.":".$apoll->alias;
// check if cookie is set showing that the user has voted for this poll
$voted  	= modApollHelper::alreadyVoted($apoll_id);
// check if the registrated user has voted and if user has logged in
$user 		=& JFactory::getUser();
$userVoted 	= modApollHelper::userVoted($user->id, $apoll_id);
$guest 		= $user->guest;
// check if this ip has been recorder
$ipVoted	= modApollHelper::ipVoted($apoll_id);
//reset the var display_poll
$display_poll = 0;

//check the start time and the end of poll
global $mainframe;
$date = &JFactory::getDate();
$date->setOffset($mainframe->getCfg('offset'));
$now   = $date->toFormat(); 

if(($now>$apoll->publish_up) && ($now<$apoll->publish_down)) {
	$display_submit = 1;

	// if only registered users can vote
	if ($params->get('only_registered')) {
		//if the user is not a guest
		if(!$guest) {
			//if only one vote is allowed per logged user
			if($params->get('one_vote_per_user')) {
				//check if user has voted
				if($userVoted) {
				//display the poll with disabled options
					$display_submit = 0;
					$msg = "You have already voted.";
					$details = JText::_("Only one vote per user is allowed.");
				//user has not voted yet
				} else {
				//display the poll
                    $display_poll = 1;
                    $display_submit = 1;
					$msg = "";
				}
			// if loggedin user are allowed to vote unlimited times
			} else {
				// Check the cookie
				if($voted) {
					$display_poll = 0;
					$display_submit = 0;
					$msg = "You have already voted.";
					$details = JText::sprintf("Only one vote each %u hours is allowed.", $apoll->lag/60);

                //hm check the ip please but only if allowed to do that
                } elseif ($params->get('ip_check')) {
    				if($ipVoted) {
    					//display the poll with disabled options
    					$display_poll = 0;
    					$display_submit = 0;
    					$msg 		= "You have already voted.";
    					$details 	= JText::_("Only one vote per IP is allowed.");
    				//if user's ip has not been logged
    				}
				//if user has not voted
				} else {
					//display the poll
					$display_poll = 1;
					$display_submit = 1;
					$msg = "";
				}
			}
		//if the user has not logged in
		} else {
		//display message please log in
			$display_poll = 1;
			$display_submit = 0;
			$msg = "Please register to vote";
		}
	// if anybody can vote
	} else {
		//if user has voted, according to the cookie check
		if($voted) {
			//display the poll with disabled options or the results
			$display_poll = ($params->get('if_voted'))? 1:0;
			$display_submit = 0;
			$msg = "You have already voted.";
			$details = JText::sprintf("Only one vote each %u hours is allowed.", $apoll->lag/60);
		//if user has not voted according to the cookie
		} else {
			//hm check the ip please but only if allowed to do that
			if ($params->get('ip_check')) {
				if($ipVoted) {
					//display the poll with disabled options
					$display_poll = ($params->get('if_voted'))? 1:0;
					$display_submit = 0;
					$msg 		= "You have already voted.";
					$details 	= JText::_("Only one vote per IP is allowed.");
				//if user's ip has not been logged
				} else {
					//display the poll
					$display_poll = 1;
					$display_submit = 1;
					$msg = "";
				}
			//if we are not allowed to do the ip check
			} else {
				//display the poll
				$display_poll = 1;
				$display_submit = 1;
				$msg = "";
			}
		}
	}

} else {
	$display_submit = 0;
	$msg = "The voting for this poll has not started yet."." ";
	$publish_up = JFactory::getDate($apoll->publish_up);
	$details = JText::_("It will start on:")." ".$publish_up->toFormat($params->get('msg_date_format'));
}
//if deadline has passed change the msg
if($now>$apoll->publish_down) { 
	$display_poll = 0;
	$msg = "The voting for this poll has ended"." ";
	$publish_down = JFactory::getDate($apoll->publish_down);
	$details = JText::_("on:")." ".$publish_down->toFormat($params->get('msg_date_format'));
}

$disabled = ($display_submit)? '':'disabled="disabled"';
//if show messages is set to no, reset all messages
//if(!$params->get('show_msg')) {$msg ='<br />';}

if ( $apoll && $apoll->id ) {
	$layout = JModuleHelper::getLayoutPath('mod_apoll');
	$tabcnt = 0;
	$options = modApollHelper::getApollOptions($apoll_id);
	$itemid = modApollHelper::getItemid($apoll_id);

	require($layout);

}