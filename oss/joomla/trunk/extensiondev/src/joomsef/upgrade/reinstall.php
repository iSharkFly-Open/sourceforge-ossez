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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'admin.sef.php', 'upgrade', DS.'admin'.DS.'admin.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'extensions_params.xml', 'upgrade', DS.'admin'.DS.'extensions_params.xml');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'index.html', 'upgrade', DS.'admin'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sef.php', 'upgrade', DS.'admin'.DS.'uninstall.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sql', 'upgrade', DS.'admin'.DS.'uninstall.sql');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'index.html', 'upgrade', DS.'admin'.DS.'adapters'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'default.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'default.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'words.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'words.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'box.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'box.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'cancel_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'cancel_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'delete_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'delete_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'down.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'down.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'download_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'download_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'edit_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'edit_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'install.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'install.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'reload_f2.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'reload_f2.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'uninstall.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'uninstall.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'up.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'up.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'upgrade.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'upgrade.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-301-redirects.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-301-redirects.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-404-logs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-404-logs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefconfig.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefconfig.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefcpanel.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefcpanel.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-docs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-docs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-help.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-help.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-info.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-info.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-manage-sitemap.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-manage-sitemap.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-manage-tags.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-manage-tags.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefplugin.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefplugin.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-trashed.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-trashed.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-url-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-url-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-url-user.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-url-user.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-bing.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-bing.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-google.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-google.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-yahoo.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-yahoo.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-301-redirects.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-301-redirects.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-404-logs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-404-logs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-artio.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-artio.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-clear.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-clear.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-docs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-docs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-forum.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-forum.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-help.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-help.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-info.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-info.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-sitemap.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-sitemap.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-tags.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-tags.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-words.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-words.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-support.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-support.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-delete.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-delete.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-user.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-user.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'js'.DS.'words.js', 'upgrade', DS.'admin'.DS.'assets'.DS.'js'.DS.'words.js');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'js'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'js'.DS.'index.html');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'index.html', 'upgrade', DS.'admin'.DS.'classes'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'ajax.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'ajax.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'htaccess.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'index.html', 'upgrade', DS.'admin'.DS.'controllers'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'info.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'info.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'urls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'words.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'words.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extensions.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extensions.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'models'.DS.'htaccess.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'import.php', 'upgrade', DS.'admin'.DS.'models'.DS.'import.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'index.html', 'upgrade', DS.'admin'.DS.'models'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'models'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sef.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'urls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'word.php', 'upgrade', DS.'admin'.DS.'models'.DS.'word.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'words.php', 'upgrade', DS.'admin'.DS.'models'.DS.'words.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'index.html', 'upgrade', DS.'admin'.DS.'tables'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'movedurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'movedurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'word.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'word.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'index.html',            'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php',         'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'index.html',  'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'index.html');
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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'generate.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'generate.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'navigation.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'navigation.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'index.html');
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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'index.html');

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
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'index.html', 'upgrade', DS.'site'.DS.'index.html');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'index.html', 'upgrade', DS.'site'.DS.'assets'.DS.'index.html');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'jsLinks.css', 'upgrade', DS.'site'.DS.'assets'.DS.'jsLinks.css');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'jsLinks.js', 'upgrade', DS.'site'.DS.'assets'.DS.'jsLinks.js');

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
if ( JFile::exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_joomfish'.DS.'joomfish.xml') ) {
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'sefexttexts.xml', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'sefexttexts.xml');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJsextensionFilter.php', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'translationJsextensionFilter.php');
    $this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_joomfish'.DS.'contentelements'.DS.'translationJsparamsFilter.php', 'upgrade', DS.'admin'.DS.'contentelements'.DS.'translationJsparamsFilter.php');
}

?>
