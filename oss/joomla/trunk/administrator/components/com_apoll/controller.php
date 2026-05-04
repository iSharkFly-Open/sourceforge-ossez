<?php
# @version $Id: administator/components/com_apoll/controller.php
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

jimport( 'joomla.application.component.controller' );

/**
 * @package		Joomla
 * @subpackage	Config
 */
class ApollsController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{
		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');
		$this->registerTask( 'unpublish', 	'publish');
		$this->registerTask( 'preview', 	'display');
		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display');
		$this->registerTask( 'deleteVotes', 'deleteVotes');
		$this->registerTask( 'saveConfig',  'saveConfig');
		$this->registerTask( 'importPolls', 'importPolls');
		$this->registerTask( 'installJoomfishFiles', 'installJoomfishFiles');
	}

	function display( )
	{
		switch($this->getTask())
		{
			case 'add'     :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'apoll'  );
				JRequest::setVar( 'edit', false  );
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'apoll'  );
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'apoll'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');
		if(empty($view)) {
			JRequest::setVar('view', 'apolls');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the apoll parent information
		$row	=& JTable::getInstance('apoll', 'Table');
		$post	= JRequest::get( 'post' );
		if (!$row->bind( $post ))
		{
			JError::raiseError(500, $row->getError() );
		}
		$isNew = ($row->id == 0);

		//reset the poll, erases hits and voters
		if($optionReset = JRequest::getVar('reset')) {
			$model =& $this->getModel('apolls');
			$model->resetVotes((int)$row->id);
		}
		
		if (!$row->check())
		{
			JError::raiseError(500, $row->getError() );
		}

		if (!$row->store())
		{
			JError::raiseError(500, $row->getError() );
		}
		$row->checkin();
		
		// put all apoll options and their colors and ordering in arrays
		$options 	= JArrayHelper::getValue( $post, 'apolloption', array(), 'array' );
		$colors 	= JArrayHelper::getValue( $post, 'color', array(), 'array' );
		$orderings	= JArrayHelper::getValue( $post, 'ordering', array(), 'array' );
	
		//options represented by id=>text
 		foreach ($options as $i=>$text)
		{
			
				// turns ' into &#039;
				$text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

				if ($isNew)
				{
					if($text!=''){
					$obj = new stdClass();
					$obj->apoll_id  = (int)$row->id;
					$obj->text     = $text;
					$obj->color    = substr($colors[$i], -6);
					$obj->ordering = $orderings[$i];
					$db->insertObject('#__apoll_options', $obj);
					}
				} 
				else
				{
					if($text!=''){
						$obj = new stdClass();
						$obj->id  	  		= (int)$i;
						$obj->text 	   	= $text;
						$obj->color	   	= substr($colors[$i], -6);
						$obj->ordering	= $orderings[$i];
						$db->updateObject('#__apoll_options', $obj, 'id');
					} else {
						
					//If there are empty options delete them so we don't waste database space
						$model =& $this->getModel('apoll');
						if(!$model->deleteOption($i)) {
							JError::raiseError(500, $model->getError() );
						}	
					}
				}
			
		} 		 
		//Are there any new options that are added
		if (JRequest::getVar('is_there_extra')) {
			$extra_options	 = JArrayHelper::getValue( $post, 'apolloptionextra', array(), 'array' );
			$extra_ordering	 = JArrayHelper::getValue( $post, 'extra_ordering', array(), 'array' );
			$extra_colors 	 = JArrayHelper::getValue( $post, 'extra_colors', array(), 'array' );
			
		//Insert in the database the newly created options
			foreach ($extra_options as $k=>$text)
			{
				if($text!=""){
					$obj = new stdClass();
					$obj->apoll_id  = (int)$row->id;
					$obj->text     = $text;
					$obj->color    = substr($extra_colors[$k], -6);
					$obj->ordering = $extra_ordering[$k];
					$db->insertObject('#__apoll_options', $obj);	
				}				
			}
		}
		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to Poll saved' );
				$link = 'index.php?option=com_apoll&view=apoll&task=edit&cid[]='.$row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'Poll saved' );
				$link = 'index.php?option=com_apoll';
				break;
		}

		$this->setRedirect($link, $msg);
	}

	function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );

		JArrayHelper::toInteger($cid);
		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$apoll =& JTable::getInstance('apoll', 'Table');
			if (!$apoll->delete( $cid[$i] ))
			{
				$msg .= $apoll->getError();
				$tom = "error";
			} else {
				$msg = JTEXT::_('Poll successfully deleted');
				$tom = "";
			}
		}
		$this->setRedirect('index.php?option=com_apoll', $msg, $tom);
	}
	
	function deleteVotes()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$apoll_id	= JRequest::getVar('apoll_id', 0, 'POST', 'INT');
		$model =& $this->getModel('votes');
	
		if($model->deleteVotes()) {
			$msg = Jtext::_("The selected votes were successfuly deleted!");
			$tom = "";
		} else {
			$msg = Jtext::_("The selected votes could not be deleted!");
			$tom = "error";
		}			
		$this->setRedirect('index.php?option=com_apoll&task=view&view=votes&id='.$apoll_id, $msg, $tom);
	}

	/**
	* Publishes or Unpublishes one or more records
	* @param array An array of unique category id numbers
	* @param integer 0 if unpublishing, 1 if publishing
	* @param string The current url option
	*/
	function publish()
	{
		global $mainframe;

		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$user 	=& JFactory::getUser();
		
		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$publish	= ( $this->getTask() == 'publish' ? 1 : 0 );
		$table =& JTable::getInstance('apoll', 'Table');
		JArrayHelper::toInteger($cid);

		if(!$table->publish($cid, $publish, $user->get('id'))) {
			$table->getError();
			}

		if (count( $cid ) < 1)
		{
			$action = $publish ? 'publish' : 'unpublish';
			JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
		}

		$mainframe->redirect( 'index.php?option=com_apoll' );
	}

	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id		= JRequest::getVar( 'id', 0, '', 'int' );
		$db		=& JFactory::getDBO();
		$row	=& JTable::getInstance('apoll', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_apoll' );
	}


	//Function to delete all votes from selected polls
	function resetVotes() {
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$model =& $this->getModel('apolls');
		if($model->resetVotes()) {
			$msg = Jtext::_("Votes for this poll were successfuly deleted!");
			$tom = "";
		} else {
			$msg = Jtext::_("Votes for this poll could not be deleted!");
			$tom = "error";
		}
		$this->setRedirect( 'index.php?option=com_apoll&view=apolls', $msg, $tom );
	}
	
	
	//Function to save the configuration settings
	function saveConfig() {
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$model =& $this->getModel('config');
		
		if (!$model->save()) {
			$msg = JText::_("Apoll configuration could not be saved!"); 
			$tom = "error"; 
		} else {
			$msg = JText::_("Apoll configuration successfully saved!"); 	
			$tom = ""; 
		}
		$this->setRedirect('index.php?option=com_apoll&task=view&view=config',$msg , $tom );
	}	
	
	//Function to import polls from native joomla poll component
	function importPolls() {
		$model =& $this->getModel('config');

		if (!$model->import()) {
			$msg = JText::_("Polls could not be imported!"); 
			$tom = "error"; 
		} else {
			$msg = JText::_("Polls were successfuly imported!"); 	
			$tom = ""; 
		}
		$this->setRedirect('index.php?option=com_apoll&task=view&view=config',$msg, $tom );
	}
	
	function installJoomfishFiles() {
		$model =& $this->getModel('config');
	
		if ($model->copyJoomfishFiles()) {
			$msg = JText::_("Apoll files for Joomfish! were installed!"); 
			$tom = ""; 
		} else {
			$msg = JText::_("Apoll files for Joomfish! were not installed!"); 	
			$tom = "error"; 
		}
		$this->setRedirect('index.php?option=com_apoll&task=view&view=config',$msg, $tom );
	}
}