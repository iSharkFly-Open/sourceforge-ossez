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

// langauge translation related
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'admin.sef.php', 'upgrade', DS.'admin'.DS.'admin.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sef.php', 'upgrade', DS.'admin'.DS.'uninstall.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'htaccess.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php');

// delete unused file
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'strings.php', 'delete');

// Language files
// We need to check every directory for existence and copy only the languages in use
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.menu.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.menu.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.plg_system_joomsef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.plg_system_joomsef.ini');
}
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'cs-CZ') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'cs-CZ'.DS.'cs-CZ.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'cs-CZ.com_sef.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'cs-CZ'.DS.'cs-CZ.com_sef.menu.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'cs-CZ.com_sef.menu.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'cs-CZ'.DS.'cs-CZ.plg_system_joomsef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'cs-CZ.plg_system_joomsef.ini');
}
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'fi-FI') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'fi-FI'.DS.'fi-FI.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'fi-FI.com_sef.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'fi-FI'.DS.'fi-FI.com_sef.menu.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'fi-FI.com_sef.menu.ini');
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'fi-FI'.DS.'fi-FI.plg_system_joomsef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'fi-FI.plg_system_joomsef.ini');
}

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

?>
