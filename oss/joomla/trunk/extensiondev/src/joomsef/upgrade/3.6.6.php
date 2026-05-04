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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'admin.sef.php', 'upgrade', DS.'admin'.DS.'admin.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sef.php', 'upgrade', DS.'admin'.DS.'uninstall.sef.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'box.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'box.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon.png');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'ajax.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'ajax.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'htaccess.php');
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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'movedurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'movedurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'word.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'word.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php',         'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'doc.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'templates'.DS.'default_extslist.php', 'upgrade', DS.'admin'.DS.'views'.DS.'templates'.DS.'default_extslist.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'message.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'confirm.php', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'tmpl'.DS.'confirm.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php');

// Language files
// We need to check every directory for existence and copy only the languages in use
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}

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

// Fix default Content variable filters using script
$this->_addScript(DS.'upgrade'.DS.'3.6.6.script.php');
