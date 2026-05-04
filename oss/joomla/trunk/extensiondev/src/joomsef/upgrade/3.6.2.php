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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'extensions_params.xml', 'upgrade', DS.'admin'.DS.'extensions_params.xml');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extensions.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extensions.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'models'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php');

// Language files
// We need to check every directory for existence and copy only the languages in use
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// Extensions
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');

// SQL
$this->_addSQL("CREATE TABLE IF NOT EXISTS `#__sefaliases` (`id` int(11) NOT NULL auto_increment, `alias` varchar(255) NOT NULL DEFAULT '', `vars` text NOT NULL, `url` int(11) NOT NULL, PRIMARY KEY (`id`), KEY `alias` (`alias`)) TYPE=MyISAM");
