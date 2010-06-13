<?php
# @file: administator/components/com_apoll/views/apoll/view.raw.php
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

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	aPoll
 * @since 1.5
 */
class ApollViewApoll extends JView
{
	function display( $tpl = null )
	{
		// Get data from the model
		require_once(JPATH_COMPONENT.DS.'models'.DS.'ajaxvote.php');
		$model = new ApollModelAjaxvote();
		
		$vote		=  $model->getVoted();
		$data		=  $model->getData();
		$total		=  $model->getTotal();
		
		//print_r($data); exit;
		$apoll_id 	= JRequest::getVar( 'id', 0, 'POST', 'int' );
		
		// import library
		jimport('joomla.utilities.simplexml');
		// create root node
		$xml = new JSimpleXMLElement('apoll', array('id' => $apoll_id));
		// add children
		
		//get total votes 
		$sum = 0;
		foreach ($data as $row) 
		{
			$sum += $row->votes;
		}
		
		$number_voters = 0;

		$options =&  $xml->addChild('options');
		
		function toPercent($val, $sum) { 
			return round($val*100/$sum, 1);
		}
		for($i=0; $i<$total; $i++) 
		{
			$option =& $options->addChild('option', 
				array('id'=>$data[$i]->id, 'percentage'=>toPercent($data[$i]->votes, $sum), 'votes'=>$data[$i]->votes, 'color'=>$data[$i]->color));
			$text =& $option->addChild('text');
			$text->setData($data[$i]->text);		
			$number_voters += $data[$i]->votes;
		}
		$voters =& $xml->addChild('voters');
		$voters->setData($number_voters);
		
		$this->assign('xml', $xml->toString());
		$this->setLayout('raw');
		parent::display($tpl);
	}
}