<?php
/**
 * SEF component for Joomla! 1.5
 * Upgrade definition file.
 *
 * @author      $Author: David Jozefov $
 * @copyright   ARTIO s.r.o., http://www.artio.cz
 * @package     JoomSEF
 * @license     GNU/GPLv3 http://www.gnu.org/copyleft/gpl.html
 */

// XML definition file
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'sef.xml', 'upgrade', DS.'sef.xml');

// Admin files
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'extensions_params.xml', 'upgrade', DS.'admin'.DS.'extensions_params.xml');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'extension.php');

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// Content elements (if JoomFish is present)
jimport( 'joomla.filesystem.file' );
if ( JFile::exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomfish'.DS.'joomfish.xml') ) {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJsparamsFilter.php', 'delete');
}
else {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'contentelements'.DS.'translationJsparamsFilter.php', 'delete');
}

// Change the structure of SEF extensions in database
// 1. Add the title field to table
$this->_addSQL("ALTER TABLE `#__sefexts` ADD COLUMN `title` VARCHAR(255) NOT NULL DEFAULT ''");

// 2. Load all the extensions saved
$db =& JFactory::getDBO();
$db->setQuery("SELECT * FROM `#__sefexts`");
$exts = $db->loadObjectList();

// 3. Process the extensions if there are any - copy the title from parameters to new field
if( is_array($exts) && (count($exts) > 0) ) {
    foreach( $exts as $ext ) {
        $params = $ext->params;
        $matches = array();
        if( preg_match('/^customMenuTitle=(.*)/', $params, $matches) > 0 ) {
            // customMenuTitle found
            $customTitle = $matches[1];
            
            // Add SQL to update the title
            $this->_addSQL("UPDATE `#__sefexts` SET `title` = " . $db->Quote($customTitle) . " WHERE `id` = '{$ext->id}' LIMIT 1");
        }
    }    
}

?>
