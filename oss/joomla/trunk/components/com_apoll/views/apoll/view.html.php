<?php
# @file: components/com_apoll/views/apoll/view.html.php 
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

jimport( 'joomla.application.component.view');

class ApollViewApoll extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db 	  =& JFactory::getDBO();
		$document =& JFactory::getDocument();
		$pathway  =& $mainframe->getPathway();

		$apoll_id = JRequest::getInt('id', 0);

		$apoll =& JTable::getInstance('apoll', 'Table');
		$apoll->load( $apoll_id );

		// if id value is passed and apoll not published then exit
		if ($apoll->id > 0 && $apoll->published != 1) {
			JError::raiseError( 403, JText::_('Access Forbidden') );
			return;
		}

		// Adds parameter handling
		$params =& $mainframe->getParams();
		$apollParams = new JParameter($apoll->params);
		$params->merge($apollParams, $params);

		//Set page title information
		$menus	=& JSite::getMenu();
		$menu	= $menus->getActive();

		// because the application sets a default page title, we need to get it
		// right from the menu item itself
		if (is_object( $menu )) {
			$menu_params = new JParameter( $menu->params );			
			if (!$menu_params->get( 'page_title')) {
				$params->set('page_title',	$apoll->title);
			}
		} else {
			$params->set('page_title',	$apoll->title);
		}
		$document->setTitle( $params->get( 'page_title' ) );

		//Set pathway information
		$pathway->addItem($apoll->title, '');

		$params->def( 'show_page_title', 1 );
		$params->def( 'page_title', $apoll->title );

		

		// Check if there is a apoll corresponding to id and if apoll is published
		if ($apoll->id > 0) {
			if (empty( $apoll->title )) {
				$apoll->id = 0;
				$apoll->title = JText::_( 'Select poll from the list' );
			}
            //get the array of options
    		$options =& $this->get('Options');

		} else {
			$options = array();
		}

		// list of apolls for dropdown selection
		$pList = $this->get('Apolls');

		foreach ($pList as $k=>$p) {
			$pList[$k]->url = JRoute::_('index.php?option=com_apoll&view=apoll&id='.$p->slug);
		}

		array_unshift( $pList, JHTML::_('select.option',  '', JText::_( 'Select Poll from the list' ), 'url', 'title' ));

		// dropdown output
		$lists = array();

		$lists['apolls'] = JHTML::_('select.genericlist',   $pList, 'id',
			'class="inputbox" size="1" style="width:400px" onchange="if (this.options[selectedIndex].value != \'\') {document.location.href=this.options[selectedIndex].value}"',
 			'url', 'title',
 			JRoute::_('index.php?option=com_apoll&view=apoll&id='.$apoll->id.':'.$apoll->alias)
 			);

		//get the number of voters
		$voters		= isset($options[0]) ? $options[0]->voters : 0;
		$num_of_options = count( $options );
		
		for ($i = 0; $i < $num_of_options; $i++) {
			
			$vote =& $options[$i];
			//assign pie color to colors array
			$colors[$i]=$vote->color;
			//$links[$i]=$vote->link;

			if ($voters > 0) {
				$vote->percent = round( 100 * $vote->hits / $voters, 1 );
			} else  {
				//if nobody has voted yet
				if ($params->get('show_what') == 1) {
					$vote->percent = round(100/$num_of_options, 1 );
				} else {
					$vote->percent	= 0;
				}
			}

		}
		

// show_what==1 because 1=show pie, 0=joomla default, 3 may be something else later
		//Pie chart 
		// pass in two arrays, one of data, the other data labels
		$title_lenght = $params->get('title_lenght');


        foreach ($options as $vote_array) {
            //if show hits is true
            if($params->get('show_hits')) $hits = " (".$vote_array->hits.")"; 
			else $hits = '';
            //if show options with zero votes is true
            if ($params->get('show_zero_votes')) {
                $text = JString::substr(html_entity_decode( $vote_array->text, ENT_QUOTES, "utf-8" ), 0, $title_lenght).$hits;
                //$values[] = array("value" => $vote_array->percent, "label" => $text, "text" => $text);
				$values[] = '
				"value":'.$vote_array->percent.', 
				"label":"'.addslashes($text).'", 
				"text":"'.addslashes($text).'"
				';
 				
            } else {
                //show only options that have hits
                if($vote_array->percent) {
                    $text = JString::substr(html_entity_decode( $vote_array->text, ENT_QUOTES, "utf-8" ), 0, $title_lenght).$hits;
                    //$values[] = array("value" => $vote_array->percent, "label" => $text, "text" => $text);
					$values[] = '
					"value":'.$vote_array->percent.', 
					"label":"'.addslashes($text).'", 
					"text":"'.addslashes($text).'"
					';	
				}
            }
        }

		
// prepare the javascript for the pie
		//colors and values array to json 
		//TODO use json_encode some day
		$json_colors = '["'.implode('", "',$colors).'"]';
		$json_values = '[{'.implode('}, {', $values).'}]';

$js = '
        function ofc_ready() {}

        function open_flash_chart_data()
        {
        	return JSON.stringify(data);
        }

        var data = {
        "title":{
        	"text" : "",
        	"style" : "font-size: 14px; font-family: Verdana; text-align: center;"
        	},
        "bg_colour" : "#'.$params->get("bg_color").'",
        "elements" :
            [{
            "type" : "pie",
            "tip" : "#label# \n#val#%",
            "colours" : '.$json_colors.',
            "alpha" : '.$params->get("opacity").',
            "start-angle" : '.$params->get("start_angle").',
            "radius" : '.$params->get("radius").',
            "no-labels" : '.$params->get("no_labels").',
            "values" : '. $json_values . ',
            "gradient-fill" : '.$params->get("gradient"). ',
            "font-size" : '.$params->get("font_size").',
            "label-colour" : "#'.$params->get("font_color").'",
            "animate":[{
                "distance" : '.$params->get("bounce_dinstance").',
                "type" : "'.$params->get("animation_type").'"
        		}]
        	}]
        };
';

		//Check if the user has voted
		$cookieName	= JUtility::getHash( $mainframe->getName() . 'apoll' . $apoll_id );
		$cookieVoted= JRequest::getVar( $cookieName, '0', 'COOKIE', 'INT');
		$user		=& JFactory::getUser();
		$query 		= "SELECT date FROM ".$db->nameQuote('#__apoll_votes')
		." WHERE apoll_id=".(int)$apoll_id
		." AND user_id=".(int)$user->id
		; 
		$db->setQuery($query);
		$userVoted	=($db->loadResult())?1:0;
		$ip 		= $_SERVER['REMOTE_ADDR'];
		$query 		= "SELECT ip FROM ".$db->nameQuote('#__apoll_votes')
		." WHERE apoll_id=".(int) $apoll_id
		." AND ip = INET_ATON('".$ip."')";
		$db->setQuery($query); 
		$ipVoted	= ($db->loadResult())?1:0;
		
		$date 		= &JFactory::getDate();
		$date->setOffset($mainframe->getCfg('offset'));
		$now   		= $date->toFormat();
	
		//Algorithm for shoiwing or not the poll in the component
		if ($params->get('allow_voting')) {
			if(($now>$apoll->publish_up) && ($now<$apoll->publish_down)) { 
				if ($params->get('only_registered')) {
					if (!$user->guest) {
						if($params->get('one_vote_per_user')) {
							if ($userVoted) {
								$allowToVote = 0;
								$msg = "You have already voted"; 
							} else {
								$allowToVote = 1;
							}
						} else {
							if ($cookieVoted) {
								$allowToVote = 0;
								$msg = "You have already voted"; 
							} else { 
								$allowToVote = 1;
							}							
						}
					} else {
						$allowToVote = 0;
						$msg = "Please register to vote";
					}
				} else {
					if ($cookieVoted) {
						$allowToVote = 0;
						$msg = "You have already voted"; 
					} else {
						if ($params->get('ip_check')) {
							if($ipVoted) {
								$allowToVote = 0;
								$msg = "You have already voted"; 
							} else {
								$allowToVote = 1;
							}
						} else {
							$allowToVote = 1;
						}
					}
				}
			} else {
				$allowToVote = 0;
			}
			
			if($now<$apoll->publish_up) { 
				$msg = "Voting for this poll has not started yet";
			}		
			if($now>$apoll->publish_down) { 
				$msg = "Voting for this poll has ended.";
			}
		} else {
			$allowToVote = 0;
		}


		$this->assignRef('lists',				$lists);
		$this->assignRef('params',				$params);
		$this->assignRef('apoll',				$apoll);
		$this->assignRef('options',				$options); 
		$this->assignRef('allowToVote',			$allowToVote);
		$this->assignRef('msg',					$msg);
		$this->assignRef('js',				    $js);

		parent::display($tpl);
	}
}
?>
