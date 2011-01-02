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
 * Adds default Content variable filters
 */

$db =& JFactory::getDBO();

$defaultFilters = '+^[0-9]*$=limit,limitstart,month,year'."\n".'+^[a-zA-Z]+$=task,type,view'."\n".'+^[0-9]+(:[a-zA-Z0-9._-]+)?$=catid,id,sectionid';
$defaultVars = array('view', 'id', 'catid', 'sectionid', 'type', 'year', 'month', 'filter', 'limit', 'limitstart', 'task');

// Get the content extension
$db->setQuery("SELECT `id`, `filters`, `params` FROM `#__sefexts` WHERE `file` = 'com_content.xml' LIMIT 1");
$content = $db->loadObject();
if (is_null($content)) {
    // Insert default values
    $db->setQuery("INSERT INTO `#__sefexts` (`file`, `filters`, `params`) VALUES ('com_content.xml', ".$db->Quote($defaultFilters).", 'acceptVars=view; id; catid; sectionid; type; year; month; filter; limit; limitstart; task')");
    $db->query();
    return;
}

// Add new filters to the old ones
if (trim($content->filters) == '') {
    $newFilters = $defaultFilters;
}
else {
    $newFilters = $content->filters . "\n" . $defaultFilters;
}

// Parse accept vars
$contentParams = new JParameter($content->params);
$aVars = trim($contentParams->get('acceptVars', ''));
if ($aVars != '') {
    $aVars = array_map('trim', explode(';', $aVars));
    
    // Add default vars
    foreach ($defaultVars as $defaultVar) {
        if (!in_array($defaultVar, $aVars)) {
            $aVars[] = $defaultVar;
        }
    }
}
else {
    $aVars = $defaultVars;
}

// Set new accept vars
$acceptVars = implode('; ', $aVars);
$contentParams->set('acceptVars', $acceptVars);

// Store changes
$db->setQuery("UPDATE `#__sefexts` SET `filters` = ".$db->Quote($newFilters).", `params` = ".$db->Quote($contentParams->toString())." WHERE `id` = '{$content->id}' LIMIT 1");
$db->query();

?>