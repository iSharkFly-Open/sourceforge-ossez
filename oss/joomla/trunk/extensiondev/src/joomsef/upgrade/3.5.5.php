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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controller.php', 'upgrade', DS.'admin'.DS.'controller.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'install.sql', 'upgrade', DS.'admin'.DS.'install.sql');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'uninstall.sql', 'upgrade', DS.'admin'.DS.'uninstall.sql');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'default.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'default.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'words.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'words.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-bing.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-bing.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-google.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-google.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-32-yahoo.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-32-yahoo.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'js'.DS.'words.js', 'upgrade', DS.'admin'.DS.'assets'.DS.'js'.DS.'words.js');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'js'.DS.'index.html', 'upgrade', DS.'admin'.DS.'assets'.DS.'js'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'ajax.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'ajax.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'words.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'words.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'metatags.php', 'upgrade', DS.'admin'.DS.'models'.DS.'metatags.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'movedurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'movedurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sef.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sef.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sitemap.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sitemap.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'urls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'word.php', 'upgrade', DS.'admin'.DS.'models'.DS.'word.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'words.php', 'upgrade', DS.'admin'.DS.'models'.DS.'words.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'sefurl.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'sefurl.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'tables'.DS.'word.php', 'upgrade', DS.'admin'.DS.'tables'.DS.'word.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'editid.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'view.html.php',         'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extensions'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'movedurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'templates'.DS.'default_extslist.php', 'upgrade', DS.'admin'.DS.'views'.DS.'templates'.DS.'default_extslist.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'upgrade'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'tmpl'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'index.html');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'index.html', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'tmpl'.DS.'index.html');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'controllers'.DS.'urls.php', 'upgrade', DS.'admin'.DS.'controllers'.DS.'urls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'extension.php', 'upgrade', DS.'admin'.DS.'models'.DS.'extension.php');

// Language files
// We need to check every directory for existence and copy only the languages in use
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.cache.php', 'upgrade', DS.'site'.DS.'sef.cache.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.ext.php', 'upgrade', DS.'site'.DS.'sef.ext.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'index.html', 'upgrade', DS.'site'.DS.'assets'.DS.'index.html');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'jsLinks.css', 'upgrade', DS.'site'.DS.'assets'.DS.'jsLinks.css');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'assets'.DS.'jsLinks.js', 'upgrade', DS.'site'.DS.'assets'.DS.'jsLinks.js');

// Extensions
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_mailto.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_mailto.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_mailto.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_mailto.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.xml');

// Plugin
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.php', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.php');
$this->_addFileOp(DS.'plugins'.DS.'system'.DS.'joomsef.xml', 'upgrade', DS.'admin'.DS.'plugin'.DS.'joomsef.xml');

// Table structures
$this->_addSQL("ALTER TABLE `#__sefurls` ADD COLUMN `enabled` TINYINT(1) NOT NULL DEFAULT '1', ADD COLUMN `locked` TINYINT(1) NOT NULL DEFAULT '0', ADD COLUMN `sef` TINYINT(1) NOT NULL DEFAULT '1', ADD COLUMN `sm_indexed` TINYINT(1) NOT NULL DEFAULT '0', ADD COLUMN `sm_date` DATE NOT NULL DEFAULT '0000-00-00', ADD COLUMN `sm_frequency` VARCHAR(20) NOT NULL DEFAULT 'weekly', ADD COLUMN `sm_priority` VARCHAR(10) NOT NULL DEFAULT '0.5'");
$this->_addSQL("CREATE TABLE IF NOT EXISTS `#__sefwords` (`id` INTEGER(11) NOT NULL auto_increment, `word` VARCHAR(255) NOT NULL DEFAULT '', PRIMARY KEY (`id`)) TYPE=MyISAM");
$this->_addSQL("CREATE TABLE IF NOT EXISTS `#__sefurlword_xref` (`word` INTEGER(11) NOT NULL, `url` INTEGER(11) NOT NULL, PRIMARY KEY (`word`, `url`)) TYPE=MyISAM");

// Menu changes
// Get menu item id
$db =& JFactory::getDBO();
$db->setQuery("SELECT `id` FROM `#__components` WHERE `admin_menu_link` = 'option=com_sef' AND `parent` = '0' LIMIT 1");
$menuid = $db->loadResult();

// Add new menu items
$this->_addSQL("INSERT INTO `#__components`(`name`, `link`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `params`, `enabled`) VALUES ".
               " ('Manage Meta Tags',           '', '{$menuid}', 'option=com_sef&controller=metatags',            'Manage Meta Tags',  'com_sef',  '6', 'components/com_sef/assets/images/icon-16-url-edit.png', '', '1')".
               ",('SiteMap',                    '', '{$menuid}', 'option=com_sef&controller=sitemap',             'SiteMap',           'com_sef',  '6', 'components/com_sef/assets/images/icon-16-url-edit.png', '', '1')"
               );

// Move the plugin parameters to configuration
// Load the plugin parameters
$db->setQuery("SELECT `params` FROM `#__plugins` WHERE `folder` = 'system' AND `element` = 'joomsef' LIMIT 1");
$paramsdata = $db->loadResult();
if (!empty($paramsdata) && class_exists('SEFConfig')) {
    $plgparams = new JParameter($paramsdata);
    
    $sefConfig =& SEFConfig::getConfig();
    $sefConfig->enable_metadata = (bool) $plgparams->get('enable_metadata', '1');
    $sefConfig->prefer_joomsef_title = (bool) $plgparams->get('prefer_joomsef_title', '1');
    $sefConfig->use_sitename = (int) $plgparams->get('use_sitename', '2');
    $sefConfig->sitename_sep = $plgparams->get('sitename_sep', '-');
    $sefConfig->rewrite_keywords = (bool) $plgparams->get('rewrite_keywords', '1');
    $sefConfig->rewrite_description = (bool) $plgparams->get('rewrite_description', '1');
    $sefConfig->prevent_dupl = (bool) $plgparams->get('prevent_dupl', '1');
    $sefConfig->check_base_href = (int) $plgparams->get('check_base_href', '1');
    
    $sefConfig->saveConfig();
}
