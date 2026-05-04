<?php
/**
 * SEF component for Joomla! 1.5
 * Upgrade script.
 *
 * @author      $Author: David Jozefov $
 * @copyright   ARTIO s.r.o., http://www.artio.cz
 * @package     JoomSEF
 * @license     GNU/GPLv3 http://www.gnu.org/copyleft/gpl.html
 */

/**
 * Adds showall variable filter
 */

$db =& JFactory::getDBO();

$oldFilter = '+^[0-9]*$=limit,limitstart,month,year';
$newFilter = '+^[0-9]*$=limit,limitstart,month,showall,year';

// Get the content extension
$db->setQuery("SELECT `id`, `filters`, `params` FROM `#__sefexts` WHERE `file` = 'com_content.xml' LIMIT 1");
$content = $db->loadObject();
if (is_null($content)) {
    return;
}

// Parse accept vars
$contentParams = new JParameter($content->params);
$aVars = trim($contentParams->get('acceptVars', ''));
if ($aVars != '') {
    if (strpos($aVars, 'showall') === false) {
        $aVars .= '; showall';
        $contentParams->set('acceptVars', $aVars);
    }
}

// Fix the filter
$content->filters = str_replace($oldFilter, $newFilter, $content->filters);

// Store changes
$db->setQuery("UPDATE `#__sefexts` SET `filters` = ".$db->Quote($content->filters).", `params` = ".$db->Quote($contentParams->toString())." WHERE `id` = '{$content->id}' LIMIT 1");
$db->query();

?>