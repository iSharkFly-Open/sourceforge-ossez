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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'extensions_params.xml', 'upgrade', DS.'admin'.DS.'extensions_params.xml');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extensions.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extensions.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'extension.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php',         'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'templates'.DS.'default_extslist.php', 'upgrade', DS.'admin'.DS.'views'.DS.'templates'.DS.'default_extslist.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php');

// Extension installer adapter
$this->_addFileOp(DS.'libraries'.DS.'joomla'.DS.'installer'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');

// Content elements (if JoomFish is present)
jimport( 'joomla.filesystem.file' );
if ( JFile::exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomfish'.DS.'joomfish.xml') ) {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJsparamsFilter.php', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'translationJsparamsFilter.php');
}
else {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'contentelements'.DS.'translationJsparamsFilter.php', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'translationJsparamsFilter.php');
}

// Language files
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'cs-CZ') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'cs-CZ'.DS.'cs-CZ.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'cs-CZ.com_sef.ini');
}
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'fi-FI') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'fi-FI'.DS.'fi-FI.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'fi-FI.com_sef.ini');
}

// Change the structure of SEF extensions in database
// 1. Load all the extensions saved
$db =& JFactory::getDBO();
$db->setQuery("SELECT * FROM `#__sefexts`");
$exts = $db->loadObjectList();

// 2. Process the extensions if there are any
if( is_array($exts) && (count($exts) > 0) ) {
    $sefConfig =& SEFConfig::getConfig();
    
    foreach( $exts as $ext ) {
        $params = $ext->params;
        $option = substr($ext->file, 0, -4);
        
        // Add custom menu title to params
        AddToParams($params, 'customMenuTitle', $ext->title);
        
        // Add showMenuTitle to params
        if( in_array($option, $sefConfig->dontShowTitle) ) {
            AddToParams($params, 'showMenuTitle', '0');
        }
        else {
            AddToParams($params, 'showMenuTitle', '1');
        }
        
        // Add handling to params
        if( in_array($option, $sefConfig->nocache) ) {
            $handling = '1';
        }
        else if( in_array($option, $sefConfig->skip) ) {
            $handling = '2';
        }
        else {
            $handling = '0';
        }
        AddToParams($params, 'handling', $handling);
        
        // Add SQL to update the params
        $this->_addSQL("UPDATE `#__sefexts` SET `params` = " . $db->Quote($params) . " WHERE `id` = '{$ext->id}'");
    }
}

// 3. Remove the title field from table
$this->_addSQL("ALTER TABLE `#__sefexts` DROP COLUMN `title`");

// 4. Add the filters field to table
$this->_addSQL("ALTER TABLE `#__sefexts` ADD COLUMN `filters` TEXT");

// Update SEFURL table for tracing
// 1. Add trace column to table
$this->_addSQL("ALTER TABLE `#__sefurls` ADD COLUMN `trace` TEXT");


function AddToParams(&$params, $var, $val) {
    if( preg_match('/^'.$var.'=.*/', $params) > 0 ) {
        $params = preg_replace('/^'.$var.'=.*/', $var.'='.$val, $params);
    }
    else {
        $params = rtrim($params);
        if( $params != '' ) {
            $params .= "\n";
        }
        $params .= $var . '=' . $val;
    }
}
?>
