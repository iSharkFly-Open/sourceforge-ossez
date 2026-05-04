<?php
# @file: controller.php
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
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

/**
 * Static class to hold controller functions for the Poll component
 *
 * @static
 * @author		Johan Janssens <johan.janssens@joomla.org>
 * @package		Joomla
 * @subpackage	Poll
 * @since		1.5
 */
class ApollController extends JController
{
	function display()
	{
	
	//Set the default view, just in case
	$view = JRequest::getCmd('view');
	if(empty($view)) {
		JRequest::setVar('view', 'apolls');
	};	
		parent::display();
	}

	/**
 	 * Add a vote to an option
 	 */
	function vote()
	{
		global $mainframe;

		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db			=& JFactory::getDBO();
		$apoll_id	= JRequest::getVar( 'id', 0, '', 'int' );
		$option_id	= JRequest::getVar( 'voteid', 0, 'post', 'int' );
		$apoll 		=& JTable::getInstance('apoll','Table');
		if (!$apoll->load( $apoll_id ) || $apoll->published != 1) {
			JError::raiseWarning( 404, JText::_('ALERTNOTAUTH') );
			return;
		}

		$cookieName	= JUtility::getHash( $mainframe->getName() . 'apoll' . $apoll_id );
		$voted = JRequest::getVar( $cookieName, '0', 'COOKIE', 'INT');
			
		if ($voted || !$option_id )
		{
			if($voted) {
			$msg = JText::_('You already voted for this poll!');
			$tom = "error";
			}

			if(!$option_id){
				$msg = JText::_('WARNSELECT');
				$tom = "error";
			}
		}
		else
		{
			require_once(JPATH_COMPONENT.DS.'models'.DS.'apoll.php');
			$model = new ApollModelApoll();
			if ( $model->vote( $apoll_id, $option_id )) {
            //Set cookie showing that user has voted
            setcookie( $cookieName, '1', time() + 60*$apoll->lag );
            }

			$msg = JText::_( 'Thanks for your vote!' );
			$tom = "";
		}

		// set Itemid id for links
		$menu	 = &JSite::getMenu();
		$items   = $menu->getItems('link', 'index.php?option=com_apoll&view=apoll');

		$itemid  = isset($items[0]) ? '&Itemid='.$items[0]->id : '';

		$this->setRedirect( JRoute::_('index.php?option=com_apoll&view=apoll&id='. $apoll_id.':'.$apoll->alias.$itemid, false), $msg, $tom);
	}
}
?>