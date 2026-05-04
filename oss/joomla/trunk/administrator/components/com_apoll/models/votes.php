<?php
# @file: administrator/components/com_apoll/models/votes.php
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

class ApollsModelVotes extends JModel
{
	var $_data = null;
	var $_total = null;
	var $_pagination = null;

	 function __construct()
	{
		parent::__construct();

		global $mainframe, $option;

		// Get the pagination request variables
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'limitstart.votes', 'limitstart', 0, 'int' );

		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	function getData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}
		
		//DEBUG
		//echo str_replace('#__', 'jos_', $query); exit;

		return $this->_data;
	}

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
		$db		=& JFactory::getDBO();
		
		$query  = "SELECT v.id, v.date, o.text, INET_NTOA(ip) AS ip, 
		CASE WHEN v.user_id <> 0 THEN u.name ELSE ".$db->Quote(JText::_('Guest'))." END AS name
		FROM " . $db->nameQuote('#__apoll_votes') . " AS v
		LEFT JOIN " . $db->nameQuote('#__apoll_options') . " AS o ON o.id = v.option_id
		LEFT JOIN " . $db->nameQuote('#__users') . " AS u ON u.id=v.user_id "
		// Get the WHERE and ORDER BY clauses for the query
		. $this->_buildContentWhere()
		. $this->_buildContentOrderBy();

		return $query;
	}

	function _buildContentOrderBy()
	{
		global $mainframe, $option;

		$filter_order = $mainframe->getUserStateFromRequest( "$option.filter_order.votes", 'filter_order', 'v.date', 'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.votes", 'filter_order_Dir', '', 'word' );

		$orderby 	= ' ORDER BY '. $filter_order .' '. $filter_order_Dir;

		return $orderby;
	}
	
	function _buildContentWhere()
	{
		global $mainframe, $option;
		$db		=& JFactory::getDBO();
		$filter_order = $mainframe->getUserStateFromRequest( "$option.filter_order.votes", 'filter_order', 'v.date', 'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.votes", 'filter_order_Dir', '', 'word' );
		$search	= $mainframe->getUserStateFromRequest( "$option.search.votes",'search','','string');

		$where = array();
		
		$apoll_id	= JRequest::getInt('id', 0, 'GET');
		$where[]	= " v.apoll_id = " . $apoll_id;
		
		if ($search)
		{
			$search	= JString::strtolower( $search );
			$search = $db->Quote('%'.$db->getEscaped( $search, true ).'%', false );
 			$where[]= ' LOWER(u.name) LIKE ' . $search;
		}
		$where 		= ' WHERE '. implode( ' AND ', $where );

		return $where;
	}
	
	function getList() {
	
		$db			=& JFactory::getDBO();
		$apoll_id	= JRequest::getInt('id', 0, 'GET');

		// list of apolls for dropdown selection
		$query = "SELECT m.id, m.title, COUNT(v.id) AS votes"
			. " FROM ".$db->nameQuote('#__apoll_polls')." AS m"
			. " LEFT JOIN ".$db->nameQuote('#__apoll_votes')." AS v"
			. " ON m.id=v.apoll_id"
			. " GROUP BY m.id ORDER BY id";
			
		$db->setQuery( $query );
		$pList = $db->loadObjectList();	
		
		//Get the title for the site=the active poll		
		foreach ($pList as $p) {
			if ($p->id==$apoll_id) $title=$p->title;  
		}	
		//Make the URLs for the dropdown
		foreach ($pList as $k=>$p)
		{
			$pList[$k]->url = JRoute::_('index.php?option=com_apoll&task=view&view=votes&id='.$p->id);
		}
		array_unshift( $pList, JHTML::_('select.option',  '', JText::_('Select Poll from the list'), 'url', 'title' ));

		// dropdown output
		$lists = array();

		$lists['apolls'] = JHTML::_('select.genericlist',   $pList, 'id', 'class="inputbox" size="1" style="width:400px" onchange="if (this.options[selectedIndex].value != \'\') {document.location.href=this.options[selectedIndex].value}"',
 			'url', 'title',
 			JRoute::_('index.php?option=com_apoll&task=view&view=votes&id='.$apoll_id)
 			);
			
		return $lists;
	}
	
	function getTitle() {
		$db 	=& JFactory::getDBO();
		$apoll_id	= JRequest::getInt('id', 0, 'GET');
		$query = "SELECT title FROM ".$db->nameQuote('#__apoll_polls')." WHERE ".$db->nameQuote('id')."=".(int)$apoll_id;
		$db->setQuery($query);
		return $db->loadResult();
	}
	
	function deleteVotes() {
		
		$db			=& JFactory::getDBO();
		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		
		JArrayHelper::toInteger($cid);
		$cids = implode(',', $cid);
	
		//Delete the chosen votes, dates, ips, users, etc from #__apolls_date table
		$query = "DELETE FROM ".$db->nameQuote('#__apoll_votes')." WHERE id IN (" . $cids . ")";
		$db->setQuery($query);
		if(!$db->query()) {
			return false;
		}	else {
			return true;
		}
	}
}
?>
