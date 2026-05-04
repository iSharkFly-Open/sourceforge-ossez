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
class ApollsModelApolls extends JModel
{
	/**
	 * Category ata array
	 *
	 * @var array
	 */
	var $_data = null;

	/**
	 * Category total
	 *
	 * @var integer
	 */
	var $_total = null;

	/**
	 * Pagination object
	 *
	 * @var object
	 */

	 var $_pagination = null;


	 function __construct()
	{
		parent::__construct();

		global $mainframe, $option;

		// Get the pagination request variables
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'limitstart.apolls', 'limitstart', 0, 'int' );

		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}
	/**
	 * Method to get weblinks item data
	 *
	 * @access public
	 * @return array
	 */
	function getData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}

		return $this->_data;
	}
	/**
	 * Method to get the total number of weblink items
	 *
	 * @access public
	 * @return integer
	 */
	function getTotal()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_total))
		{
			$query = $this->_buildQuery();
			$this->_total = $this->_getListCount($query);
		}

		return $this->_total;
	}

	/**
	 * Method to get a pagination object for the weblinks
	 *
	 * @access public
	 * @return integer
	 */
	function getPagination()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_pagination))
		{
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination( $this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}

		return $this->_pagination;
	}
	function _buildQuery()
	{
		// Get the WHERE and ORDER BY clauses for the query
		$where		= $this->_buildContentWhere();
		$orderby	= $this->_buildContentOrderBy();
		$db			=& JFactory::getDBO();
		$query = "SELECT m.*, u.name AS editor, COUNT(o.id) AS options, ( SELECT count(v.id) FROM ".$db->nameQuote('#__apoll_votes')." AS v 
		WHERE v.apoll_id=m.id) AS votes FROM ".$db->nameQuote('#__apoll_polls')." AS m 
		LEFT JOIN ".$db->nameQuote('#__users')." AS u ON u.id= m.checked_out 
		LEFT JOIN ".$db->nameQuote('#__apoll_options')." AS o ON o.apoll_id = m.id AND o.text <> ''"
		. $where
		. " GROUP BY m.id"
		. $orderby;

		return $query;
	}
	function _buildContentOrderBy()
	{
		global $mainframe, $option;

		$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order.apolls",		'filter_order',		'm.id',	'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.apolls",	'filter_order_Dir',	'',		'word' );

		$orderby 	= ' ORDER BY '. $filter_order .' '. $filter_order_Dir;

		return $orderby;
	}
	
	function _buildContentWhere()
	{
		global $mainframe, $option;
		$db					=& JFactory::getDBO();
		$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order.apolls",		'filter_order',		'm.id',	'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.apolls",	'filter_order_Dir',	'',		'word' );
		$filter_state		= $mainframe->getUserStateFromRequest( "$option.filter_state.apolls",		'filter_state',		'',		'word' );
		$search	= $mainframe->getUserStateFromRequest( "$option.search.apolls",'search','','string');

		$where = array();

		if ($search)
		{
			$search			= JString::strtolower( $search );
			$where[] 		= 'LOWER(m.title) LIKE '.$db->Quote( '%'.$db->getEscaped( $search, true ).'%', false );
		}
		if ( $filter_state ) {
			if ( $filter_state == 'P' ) {
				$where[] = 'm.published = 1';
			} else if ($filter_state == 'U' ) {
				$where[] = 'm.published = 0';
			}
		}
		$where 		= ( count( $where ) ? ' WHERE '. implode( ' AND ', $where ) : '' );

		return $where;
	}	
	

	
	function resetVotes($cid = Null) {
		$db 	=& JFactory::getDBO();
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );	
		JArrayHelper::toInteger($cid);
		$cids = implode( ',', $cid );
			
		$query = "DELETE FROM ".$db->nameQuote('#__apoll_votes')." WHERE ".$db->nameQuote('apoll_id')." IN (".$cids.")";
		$db->setQuery($query);
		if($db->query()) {
			return true;
		} else {
			return false;
		}
	}
}
?>
