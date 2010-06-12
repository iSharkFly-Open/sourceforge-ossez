<?php
/**
 * 	Component JContentPlus
 * @version 1.0.0
 * @package JContentPlus
 * @copyright Copyright (C) 2008 Joomler!.net. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author Joomler!.net  joomlers@gmail.com
 * @url http://www.joomler.net
 */

/**
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL
*/


defined('_JEXEC') or die( 'Restricted access' );

class JElementSubtitle extends JElement
{
	function fetchTooltip($label, $description, &$node, $control_name, $name) {
		static $script;

		if(is_null($script)){
			$document = & JFactory::getDocument();
			$script = "window.addEvent('domready', function(){ $$('td.paramlist_key').setProperty('width', '50%').setStyles({'width':'50%', 'padding-right':'1em'}); });";
			$document->addScriptDeclaration($script);
		}

		if(strpos($label, '@') === 0) return '&nbsp;';

		$description = trim($description);

		$position = $node->attributes('position');

		if(empty($position)){
			$align = 'left';
			$style = ' style="font-size:1.1em;color:#0B55C4;padding-left:1em;"';
			$label = '<span style="color:#55B10A">&nabla;</span>&nbsp;'. JText::_($label);
		} else {
			$align = 'right';
			$style = ' style="font-size:1.1em;color:#0B55C4;padding-left:1em;"';
			$label = '<span style="color:#55B10A">&Delta;</span>&nbsp;'. JText::_($label);
		}
		if(!empty($description)){
			$output = '<label id="'.$control_name.$name.'-lbl" for="'.$control_name.$name.'"';
			$output .= ' class="hasTip" title="'.JText::_($label).'::'.JText::_($description).'">';
			$output .= $label. '</label>';

			return $output;
		} else {
			$label = sprintf('<div align="'. $align. '"'. $style. '>%s</div>', $label);
		}

		return $label;
	}

	function fetchElement($name, $value, &$node, $control_name)
	{
		if ($value) {
			return $value;
		} else {
			return '&nbsp;';
		}
	}
}