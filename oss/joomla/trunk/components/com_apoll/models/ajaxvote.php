<?php
# @file components/com_apoll/models/ajaxvote.php
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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

/**
* @package		Joomla
* @subpackage	Apolls
*/
class ApollModelAjaxvote extends JModel
{
	var $_data = null;
	var $_total = null;
	var $_voted = null;

	function getVoted()
	{
		global $mainframe;

		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$apoll_id	= JRequest::getVar( 'id', 0, 'POST', 'int' );
		$option_id	= JRequest::getVar( 'voteid', 0, 'POST', 'int' );
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
			$this->_voted = 0;
		}
		else
		{
			require_once(JPATH_COMPONENT.DS.'models'.DS.'apoll.php');
			$model = new ApollModelApoll();
			if($model->vote( $apoll_id, $option_id )) {
			$this->_voted = 1;
            //Set cookie showing that user has voted
            setcookie( $cookieName, '1', time() + 60*$apoll->lag );
			} else {
			$this->_voted = 0;
			}
		}
		return $this->_voted = 1;
	}

	function getData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList($query);
		}
		return $this->_data;
	}
	
	function getTotal()
	{
		if (empty($this->_total))
		{
			$db	=& JFactory::getDBO();
			$query = $this->_buildQuery();
			$this->_total = $this->_getListCount($query);
		}
		return $this->_total;
	}
	
	function _buildQuery()
	{
		$db		  =& JFactory::getDBO();
		$apoll_id = JRequest::getVar( 'id', 0, 'POST', 'int' );
		$query = "SELECT o.id, o.text, o.color, COUNT(v.id) AS votes" 
		." FROM ".$db->nameQuote('#__apoll_options')." AS o "
		." LEFT JOIN ".$db->nameQuote('#__apoll_votes')." AS v "
		." ON o.id = v.option_id "
		." WHERE o.apoll_id=".(int)$apoll_id
		." GROUP BY o.id "
		;
		return $query;
	}
}
?>
