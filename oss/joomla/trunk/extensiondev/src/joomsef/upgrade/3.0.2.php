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

// DELETE FURTHER UNUSED FILES
// Admin files
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'admin.sef.html.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'checksum.md5', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'joomsef_cpanel.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'readme.inc.html', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'sef.class.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'signature.b64', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'toolbar.sef.html.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'toolbar.sef.php', 'delete');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'box.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'config.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'custom.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'custom_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'docs.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'down.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'edit_f2.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'icon.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'install.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'logs.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'logs_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'support.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'uninstall.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'up.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'upgrade.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'urls.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'urls_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'cancel_f2.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'delete_f2.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'url_301.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'images'.DS.'url_301_del.png', 'delete');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'installer.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'installer.html.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'sefext.class.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'sefext.html.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'sefext.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'sefpatch.html.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'sefpatch.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'installer'.DS.'upgrade.php', 'delete');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'czech.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'english.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'french.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'german-informal.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'german.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'italian.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'spanish.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'polish.php', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'language'.DS.'polish-utf.php', 'delete');

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'functions.php', 'delete');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.php', 'delete');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext.php', 'delete');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef_metabot.php', 'delete');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef_metabot.xml', 'delete');

// Content elements
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefext.titles.xml', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefext.texts.xml', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJSextensionFilter.php', 'delete');

// UPGRADE NEW FILES
// Admin files
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'admin.sef.php', 'upgrade', DS.'admin'.DS.'admin.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sef.php', 'upgrade', DS.'admin'.DS.'uninstall.sef.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'index.html', 'upgrade', DS.'admin'.DS.'adapters'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'strings.php', 'upgrade', DS.'admin'.DS.'assets'.DS.'strings.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'default.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'default.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'box.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'box.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'cancel_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'cancel_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'config.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'config.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'custom.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'custom.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'custom_del.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'custom_del.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'delete_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'delete_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'docs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'docs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'down.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'down.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'edit_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'edit_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'install.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'install.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'logs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'logs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'logs_del.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'logs_del.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'support.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'support.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'uninstall.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'uninstall.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'up.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'up.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'upgrade.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'upgrade.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'url_301.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'url_301.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'url_301_del.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'url_301_del.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'urls.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'urls.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'urls_del.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'urls_del.png');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'index.html', 'upgrade', DS.'admin'.DS.'classes'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'index.html', 'upgrade', DS.'admin'.DS.'controllers'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'info.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'info.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'urls.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extensions.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extensions.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'index.html', 'upgrade', DS.'admin'.DS.'models'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'urls.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'index.html', 'upgrade', DS.'admin'.DS.'tables'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'movedurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'movedurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'templates'.DS.'default_extslist.php', 'upgrade', DS.'admin'.DS.'views'.DS.'templates'.DS.'default_extslist.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'templates'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'templates'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'confirm.php', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'confirm.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'index.html');

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

// Extensions
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'_com_example.txt', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'_com_example.txt');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_banners.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_banners.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_banners.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_banners.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_mailto.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_mailto.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_mailto.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_mailto.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_newsfeeds.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_newsfeeds.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_newsfeeds.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_newsfeeds.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_user.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_user.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_user.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_user.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_weblinks.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_weblinks.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_weblinks.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_weblinks.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_wrapper.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_wrapper.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_wrapper.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_wrapper.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'index.html', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'index.html');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// Content elements (if JoomFish is present)
jimport( 'joomla.filesystem.file' );
if( JFile::exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomfish'.DS.'joomfish.xml') ) {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexttexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexttexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJsextensionFilter.php', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'translationJsextensionFilter.php');
}

// Configuration file
global $fileError;
if( !JFile::move('config.sef.php', 'configuration.php', JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sef'.DS) ) {
    $fileError = true;
}

// UPDATE THE DATABASE INFORMATION
$this->_addSQL("UPDATE `#__plugins` SET `name` = 'System - ARTIO JoomSEF', `element` = 'joomsef' WHERE `element` = 'joomsef_metabot' LIMIT 1");

$this->_addScript(DS.'upgrade'.DS.'unpatch.php');

?>
