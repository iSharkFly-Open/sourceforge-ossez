<?php
# @version $Id: administator/components/com_apoll/views/apolls/view.html.php 
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

class ApollsViewApolls extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;

		$db					=& JFactory::getDBO();
		$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order.apolls",		'filter_order',		'm.id',	'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir.apolls",	'filter_order_Dir',	'',		'word' );
		$filter_state		= $mainframe->getUserStateFromRequest( "$option.filter_state.apolls",		'filter_state',		'',		'word' );
		$search	= $mainframe->getUserStateFromRequest( "$option.search.apolls",'search','','string');
		
		// Get data from the model
		$items		= & $this->get( 'Data');
		$total		= & $this->get( 'Total');
		$pagination = & $this->get( 'Pagination' );
		
		// state filter
		$lists['state']	= JHTML::_('grid.state',  $filter_state );

		// table ordering
		$lists['order_Dir']	= $filter_order_Dir;
		$lists['order']		= $filter_order;

		// search filter
		$lists['search']= $search;

		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('lists',		$lists);
		$this->assignRef('items',		$items);
		$this->assignRef('pagination',	$pagination);

		parent::display($tpl);
	}
}