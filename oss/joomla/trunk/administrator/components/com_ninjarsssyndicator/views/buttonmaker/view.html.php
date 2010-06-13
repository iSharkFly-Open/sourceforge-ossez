<?php

defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

class NinjaRssSyndicatorViewButtonMaker extends JView
{
	function display($tpl = null)
	{
		$text = 'Button maker';
		JToolBarHelper::title(   JText::_( 'Ninja RSS Syndicator').': <small><small>[ ' . $text.' ]</small></small>', 'mediamanager.png' );
				
		parent::display($tpl);
	}
}
?>