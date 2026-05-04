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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'extensions_params.xml', 'upgrade', DS.'admin'.DS.'extensions_params.xml');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sef.php', 'upgrade', DS.'admin'.DS.'install.sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sef.php', 'upgrade', DS.'admin'.DS.'uninstall.sef.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'strings.php', 'upgrade', DS.'admin'.DS.'assets'.DS.'strings.php');

// CSS
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'default.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'default.css');

// Images
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'config.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'custom.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'custom_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'docs.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'logs.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'logs_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'support.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'url_301.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'url_301_del.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'urls.png', 'delete');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'urls_del.png', 'delete');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-301-redirects.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-301-redirects.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-404-logs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-404-logs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefconfig.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefconfig.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefcpanel.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefcpanel.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-docs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-docs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-help.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-help.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-info.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-info.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-sefplugin.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-sefplugin.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-url-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-url-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-url-user.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-url-user.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-301-redirects.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-301-redirects.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-404-logs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-404-logs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-artio.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-artio.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-clear.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-clear.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-docs.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-docs.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-forum.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-forum.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-help.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-help.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-info.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-info.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-support.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-support.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-delete.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-delete.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-edit.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-edit.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-update.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-update.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-url-user.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-url-user.png');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'config.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'htaccess.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'urls.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'htaccess.php', 'upgrade', DS.'admin'.DS.'models'.DS.'htaccess.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'import.php', 'upgrade', DS.'admin'.DS.'models'.DS.'import.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php', 'upgrade', DS.'admin'.DS.'views'.DS.'importexport'.DS.'tmpl'.DS.'importstats.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'help.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'changelog.inc.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'install'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'install'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'urlsupdated.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'urls'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'urls'.DS.'view.html.php');

// We need to create the htaccess folders first (due to a bug in upgrade model)
JFolder::create(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'advanced.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'redirect.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php', 'upgrade', DS.'admin'.DS.'views'.DS.'htaccess'.DS.'tmpl'.DS.'simple.php');

// We need to create the extensions folders first (due to a bug in upgrade model)
JFolder::create(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'index.html',            'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php',         'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'index.html',  'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'index.html');

// Language files

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

// Extensions
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_banners.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_banners.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_banners.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_banners.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_contact.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_contact.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_newsfeeds.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_newsfeeds.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_newsfeeds.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_newsfeeds.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_weblinks.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_weblinks.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_weblinks.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_weblinks.xml');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// JoomSEF extension installer adapter
$this->_addFileOp(DS.'libraries'.DS.'joomla'.DS.'installer'.DS.'adapters'.DS.'sef_ext.php', 'upgrade', DS.'admin'.DS.'adapters'.DS.'sef_ext.php');

// Database update
$this->_addSQL("ALTER TABLE `#__sefurls` ADD COLUMN `priority` INT(11) NOT NULL DEFAULT '0' AFTER `dateadd`");

// Get menu item id
$db =& JFactory::getDBO();
$db->setQuery("SELECT `id` FROM `#__components` WHERE `admin_menu_link` = 'option=com_sef' LIMIT 1");
$menuid = $db->loadResult();

if( $menuid ) {
    $this->_addSQL("INSERT INTO `#__components`(`name`, `link`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `params`, `enabled`) VALUES ".
                   " ('Control Panel',              '', '{$menuid}', 'option=com_sef',                                'Control Panel',              '',         '0', 'components/com_sef/assets/images/icon-16-sefcpanel.png', '', '1')".
                   ",('Configuration',              '', '{$menuid}', 'option=com_sef&controller=config&task=edit',    'Configuration',              '',         '1', 'components/com_sef/assets/images/icon-16-sefconfig.png', '', '1')".
                   ",('Manage Extensions',          '', '{$menuid}', 'option=com_sef&controller=extension',           'Manage Extensions',          '',         '2', 'components/com_sef/assets/images/icon-16-sefplugin.png', '', '1')".
                   ",('Edit .htaccess',             '', '{$menuid}', 'option=com_sef&controller=htaccess',            'Edit .htaccess',             '',         '3', 'components/com_sef/assets/images/icon-16-edit.png', '', '1')".
                   ",('Upgrade',                    '', '{$menuid}', 'option=com_sef&task=showUpgrade',               'Upgrade',                    '',         '4', 'components/com_sef/assets/images/icon-16-update.png', '', '1')".
                   ",('',                           '', '{$menuid}', 'option=com_sef',                                '',                           'com_sef',  '5', '', '', '1')".
                   ",('Manage SEF URLs',            '', '{$menuid}', 'option=com_sef&controller=sefurls&viewmode=3',  'Manage SEF URLs',            '',         '6', 'components/com_sef/assets/images/icon-16-url-edit.png', '', '1')".
                   ",('Manage Custom URLs',         '', '{$menuid}', 'option=com_sef&controller=sefurls&viewmode=2',  'Manage Custom URLs',         '',         '7', 'components/com_sef/assets/images/icon-16-url-user.png', '', '1')".
                   ",('View 404 Logs',              '', '{$menuid}', 'option=com_sef&controller=sefurls&viewmode=1',  'View 404 Logs',              '',         '8', 'components/com_sef/assets/images/icon-16-404-logs.png', '', '1')".
                   ",('Manage 301 Redirects',       '', '{$menuid}', 'option=com_sef&controller=movedurls',           'Manage 301 Redirects',       '',         '9', 'components/com_sef/assets/images/icon-16-301-redirects.png', '', '1')".
                   ",('',                           '', '{$menuid}', 'option=com_sef',                                '',                           'com_sef', '10', '', '', '1')".
                   ",('Documentation',              '', '{$menuid}', 'option=com_sef&controller=info&task=doc',       'Documentation',              '',        '11', 'components/com_sef/assets/images/icon-16-docs.png', '', '1')".
                   ",('Changelog',                  '', '{$menuid}', 'option=com_sef&controller=info&task=changelog', 'Changelog',                  '',        '12', 'components/com_sef/assets/images/icon-16-info.png', '', '1')".
                   ",('Support',                    '', '{$menuid}', 'option=com_sef&controller=info&task=help',      'Support',                    '',        '13', 'components/com_sef/assets/images/icon-16-help.png', '', '1')"
                   );
}

?>
