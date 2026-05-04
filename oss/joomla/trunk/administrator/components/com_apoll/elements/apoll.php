<?php
# @file: administator/components/com_apoll/elements/apoll.php 
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

class JElementApoll extends JElement
{

	var	$_name = 'Apoll';

	function fetchElement($name, $value, &$node, $control_name)
	{
		$db =& JFactory::getDBO();
                
		$query = 'SELECT a.id, a.title'
		. ' FROM ' . $db->nameQuote("#__apoll_polls") . ' AS a'
		. ' WHERE a.published = 1'
		. ' ORDER BY a.title'
		;
		$db->setQuery( $query );
		$options = $db->loadObjectList();
          
        if(JRequest::getCmd('option') == "com_modules") {
            array_unshift($options, JHTML::_('select.option', '', '- - - - - - - - - - -', 'id', 'title'));  
            array_unshift($options, JHTML::_('select.option', '0', JText::_('Show random poll'), 'id', 'title'));        
        } else {
            array_unshift($options, JHTML::_('select.option', '0', '- - '.JText::_('Select Poll').' - -', 'id', 'title'));  
        }

		return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.']', 'class="inputbox"', 'id', 'title', $value, $control_name.$name );
	}
}
