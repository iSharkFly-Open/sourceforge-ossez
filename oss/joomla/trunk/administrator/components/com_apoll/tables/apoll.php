<?php
# @version $Id: administator/components/com_apoll/tables/apoll.php
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

/**
* @package		Joomla
* @subpackage	Polls
*/
class TableApoll extends JTable
{
	/** @var int Primary key */
	var $id					= 0;
	/** @var string */
	var $title				= '';
	/** @var string */
	var $alias				= '';
	/** @var string */
	var $checked_out		= 0;
	/** @var time */
	var $checked_out_time	= 0;
	/** @var boolean */
	var $published			= 0;	
	/** @var boolean */
	var $publish_up			= 0;	
	/** @var boolean */
	var $publish_down		= 0;
	/* @var string */
	var $params 			= null;
	/** @var int */
	var $access				= 0;
	/** @var int */
	var $lag				= 0;

	/**
	* @param database A database connector object
	*/
	function __construct( &$db )
	{
		parent::__construct( '#__apoll_polls', 'id', $db );
	}

	/**
	 * Binds an array to the object
	 * @param 	array	Named array
	 * @param 	string	Space separated list of fields not to bind
	 * @return	boolean
	 */
	function bind($array, $ignore = '')
	{
		if (key_exists( 'params', $array ) && is_array( $array['params'] ))
		{
			$registry = new JRegistry();
			$registry->loadArray($array['params']);
			$array['params'] = $registry->toString();
		}
		return parent::bind($array, $ignore);
	}
	/**
	 * Overloaded check function
	 *
	 * @access public
	 * @return boolean
	 * @see JTable::check
	 * @since 1.5
	 */
	function check()
	{
		global $mainframe;
		// check for valid name
		if (trim( $this->title ) == '')
		{
			$this->setError(JText::_( 'Your Poll must contain a title.' ));
			return false;
		}
		// check for valid lag
		$this->lag = floatval( $this->lag*60 );
		if ($this->lag == 0) {
			$this->setError(JText::_( 'Your Poll must have a non-zero lag time.' ));
			return false;
		}

		if(empty($this->alias)) {
			$this->alias = $this->title;
		}
		$this->alias = JFilterOutput::stringURLSafe($this->alias);
		if(trim(str_replace('-','',$this->alias)) == '') {

			$datenow =& JFactory::getDate();
			$datenow->setOffset($mainframe->getCfg('offset'));
			$this->alias = $datenow->toFormat("%Y-%m-%d-%H-%M-%S");
		}

		return true;
	}

	// overloaded delete function
	function delete( $oid=null )
	{
		$k = $this->_tbl_key;
		if ( $oid ) {
			$this->$k = intval( $oid );
		}

		if ( parent::delete( $oid ))
		{
			$db    =& JFactory::getDBO();
			$query = "DELETE FROM ".$db->nameQuote('#__apoll_options')
			." WHERE ".$db->nameQuote('apoll_id')."=".(int) $oid.";";

			$query .= "DELETE FROM ". $db->nameQuote('#__apoll_votes'). 
			" WHERE ".$db->nameQuote('apoll_id')."=".(int)$oid.";";
			
			$db->setQuery($query);
			$db->queryBatch( $query );
			if ( !$db->query() ) {
				$this->_error .= $db->getErrorMsg() . "\n";
			}

			return true;
		}

		return false;
	}
	
	// function to get the options for current poll
	function getOptions($apoll_id) {
			
			$query = "SELECT o.*, COUNT(v.id) AS hits"
			." FROM ".$this->_db->nameQuote('#__apoll_options')." AS o"
			." LEFT JOIN ".$this->_db->nameQuote('#__apoll_votes')." AS v"
			." ON (o.id = v.option_id AND v.apoll_id = ".(int) $apoll_id . ")"
			." WHERE o.apoll_id = ".(int) $apoll_id
			." AND text <> '' GROUP BY o.id ORDER BY o.ordering";
			
			//print nl2br(str_replace('#__', 'jos_', $query)); exit; 
			$this->_db->setQuery($query);
			return $this->_db->loadObjectList();	
	}	
	
	
}
