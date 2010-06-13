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
* @subpackage	Apoll
*/
class ApollsModelApoll extends JModel
{
	var $_id = null;
	var $_data = null;	
	
	/**
	 * Store petition
	 * @param int The id of the poll
	 * @param int The id of the option selected
	 */
	function __construct()
	{
		parent::__construct();

		$array = JRequest::getVar('cid', array(0), '', 'array');
		$edit	= JRequest::getVar('edit',true);
		if($edit)
			$this->setId((int)$array[0]);
	}
	function setId($id)
	{
		// Set apoll id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}

	/**
	 * Method to get a apoll
	 *
	 * @since 1.5
	 */
	function &getData()
	{
		// Load the apoll data
		if ($this->_loadData())
		{
			// Initialize some variables
			$user = &JFactory::getUser();
		}
		else  $this->_initData();

		return $this->_data;
	}
	
	function isCheckedOut( $uid=0 )
	{
		if ($this->_loadData())
		{
			if ($uid) {
				return ($this->_data->checked_out && $this->_data->checked_out != $uid);
			} else {
				return $this->_data->checked_out;
			}
		}
	}
	function checkin()
	{
		if ($this->_id)
		{
			$apoll = & $this->getTable();
			if(! $apoll->checkin($this->_id)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return false;
	}
	function checkout($uid = null)
	{
		if ($this->_id)
		{
			// Make sure we have a user id to checkout the article with
			if (is_null($uid)) {
				$user	=& JFactory::getUser();
				$uid	= $user->get('id');
			}
			// Lets get to it and checkout the thing...
			$apoll =& $this->getTable();
			if(!$apoll->checkout($uid, $this->_id)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}

			return true;
		}
		return false;
	}
	function store($data)
	{
		$row =& $this->getTable();
		// Bind the form fields to the web link table
		if (!$row->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Create the timestamp for the date
		$row->date = gmdate('Y-m-d H:i:s');

		// Make sure the web link table is valid
		if (!$row->check()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		return true;
	}

	function _loadData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
/*			$db		=& JFactory::getDBO();
			$query 	= "SELECT d.*, COUNT(v.id) AS hits"
			." FROM ".$db->nameQuote('#__apoll_options')." AS d"
			." LEFT JOIN ".$db->nameQuote('#__apoll_votes')." AS v"
			." ON d.id=v.option_id"
			." WHERE d.apoll_id = ".(int) $this->_id
			." AND text<>'' GROUP BY d.id ORDER BY ordering";
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
	*/		return (boolean) $this->_data;
		}
		return true;
	}
	function _initData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$apoll = new stdClass();
			$apoll->id					= 0;
			$apoll->title				= null;
			$apoll->alias               = null;
			$apoll->checked_out			= 0;
			$apoll->checked_out_time	= 0;
			$apoll->published			= 0;
			$apoll->params				= null;
			$apoll->access				= null;
			$apoll->lag					= 0;
			$this->_data				= $apoll;
			return (boolean) $this->_data;
		}
		return true;
	}
	
	//delete empty options to clear the db
	function deleteOption($id) {
			$query = "DELETE FROM ".$this->_db->nameQuote('#__apoll_options')." WHERE ".$this->_db->nameQuote('id')."=".$this->_db->Quote((int)$id)." LIMIT 1";
			$this->_db->setQuery($query);
			if(!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}	
			return true;
	}
	
	
}
?>
