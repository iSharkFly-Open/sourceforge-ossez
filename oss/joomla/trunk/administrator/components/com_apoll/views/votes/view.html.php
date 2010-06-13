<?php
# @version $Id: administator/components/com_apoll/views/votes/view.html.php
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
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

class ApollsViewVotes extends JView
{
	function display($tpl = null)
	{
		global $mainframe, $option;

		$filter_order 		= $mainframe->getUserStateFromRequest( "$option.filter_order.votes", 'filter_order', 'v.date', 'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.votes", 'filter_order_Dir', '', 'word' );

		$search				= $mainframe->getUserStateFromRequest( "$option.search.votes",'search', '', 'string' );
		
		// Get data from the model
		$lists				= & $this->get( 'List');
		$title				= & $this->get( 'Title');
		$items				= & $this->get( 'Data');
		$total				= & $this->get( 'Total');
		$pagination			= & $this->get( 'Pagination' );
		
		// table ordering
		$lists['order_Dir']	= $filter_order_Dir;
		$lists['order']		= $filter_order;

		// search filter
		$lists['search']= $search;

		
		$this->assignRef('user',		$user);
		$this->assignRef('row', 		$items);
		$this->assignRef('apoll_id', 	$apoll_id);
		$this->assignRef('title',		$title);
		$this->assignRef('lists',		$lists);
		$this->assignRef('pagination',	$pagination);
		parent::display($tpl);
	
	}
}
