<?php
# @version $Id: administator/components/com_apoll/views/apoll/view.html.php
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

class ApollsViewApoll extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$uid 	= (int) @$cid[0];
		$edit   = JRequest::getVar( 'edit', true );

		$apoll =& JTable::getInstance('apoll', 'Table');
		// load the row from the db table
		if($edit)
		$apoll->load( $uid );

		// fail if checked out not by 'me'
		if ($apoll->isCheckedOut( $user->get('id') )) {
			$msg = JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The poll' ), $apoll->title );
			$this->setRedirect( 'index.php?option='. $option, $msg );
		}

		if ($apoll->id == 0)
		{
			// defaults
			$row->published	= 1;
		}

		$options = array();
		$ordering = array();

		if ($edit)
		{
			$options = $apoll->getOptions($apoll->id);
		}
		else
		{
			$apoll->lag = 24*60;
		}
		//default colors for slices
		$colors = array("ff0000","ffff99","00ccff","66ff99","ffcc00","d7ebff","ccffcc", "cccccc", "ffff00", "006699", "660000", "ffddee");

		$file = JPATH_COMPONENT.DS.'models'.DS.'apoll.xml';
		$params = new JParameter( $apoll->params, $file );
		
		$this->assignRef('apoll',	$apoll);
		$this->assignRef('options',	$options);
		$this->assignRef('showpie',	$showpie);
		$this->assignRef('params',	$params);
		$this->assignRef('color',	$colors);
		$this->assignRef('edit',	$edit);
		parent::display($tpl);

	}
}
