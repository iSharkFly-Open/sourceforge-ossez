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
 * Fixes content variable filter for catid, id and sectionid variables
 */

$db =& JFactory::getDBO();

$oldFilter = '+^[0-9]+(:[a-zA-Z0-9._-]+)?$=catid,id,sectionid';
$newFilter = '+^[0-9]+(:.+)?$=catid,id,sectionid';

// Get the content extension
$db->setQuery("SELECT `id`, `filters` FROM `#__sefexts` WHERE `file` = 'com_content.xml' LIMIT 1");
$content = $db->loadObject();
if (is_null($content)) {
    return;
}

// Fix the filter
$content->filters = str_replace($oldFilter, $newFilter, $content->filters);

// Store changes
$db->setQuery("UPDATE `#__sefexts` SET `filters` = ".$db->Quote($content->filters)." WHERE `id` = '{$content->id}' LIMIT 1");
$db->query();

?>