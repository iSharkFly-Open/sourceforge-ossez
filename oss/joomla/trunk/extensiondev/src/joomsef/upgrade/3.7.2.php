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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');

// Admin files
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-trashed.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-trashed.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'models'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'urls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'words.php', 'upgrade', DS.'admin'.DS.'models'.DS.'words.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'generate.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'generate.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'navigation.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'navigation.php');

// Language files
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

// Extensions
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// SQL
$this->_addSQL("ALTER TABLE `#__sefurls` ADD COLUMN `metacustom` TEXT AFTER `metagoogle`, ADD COLUMN `trashed` TINYINT(1) NOT NULL DEFAULT '0', ADD COLUMN `flag` TINYINT(1) NOT NULL DEFAULT '0'");
