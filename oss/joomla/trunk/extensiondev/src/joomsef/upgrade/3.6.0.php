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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'css'.DS.'default.css', 'upgrade', DS.'admin'.DS.'assets'.DS.'css'.DS.'default.css');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'box.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'box.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-key_bw.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-manage-sitemap.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-manage-sitemap.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-16-manage-tags.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-16-manage-tags.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-sitemap.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-sitemap.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-tags.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-tags.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'images'.DS.'icon-48-manage-words.png', 'upgrade', DS.'admin'.DS.'assets'.DS.'images'.DS.'icon-48-manage-words.png');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'sefurls.php', 'upgrade', DS.'admin'.DS.'models'.DS.'sefurls.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'extension'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'metatags'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'metatags'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sef'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurl'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sefurls'.DS.'tmpl'.DS.'default.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'sitemap'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'sitemap'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'word'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'word'.DS.'view.html.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'words'.DS.'view.html.php', 'upgrade', DS.'admin'.DS.'views'.DS.'words'.DS.'view.html.php');

// Language files
// We need to check every directory for existence and copy only the languages in use
if( JFolder::exists(JPATH_ROOT.DS.'administrator'.DS.'language'.DS.'en-GB') ) {
    $this->_addFileOp(DS.'administrator'.DS.'language'.DS.'en-GB'.DS.'en-GB.com_sef.ini', 'upgrade', DS.'language'.DS.'admin'.DS.'en-GB.com_sef.ini');
}

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');

// Menu changes
// Get menu item id
$db =& JFactory::getDBO();
$db->setQuery("SELECT `id` FROM `#__components` WHERE `admin_menu_link` = 'option=com_sef' AND `parent` = '0' AND `enabled` = '1' LIMIT 1");
$menuid = $db->loadResult();

// Remove the wrong menu items
$this->_addSQL("DELETE FROM `#__components` WHERE `admin_menu_link` = 'option=com_sef&controller=metatags' LIMIT 1");
$this->_addSQL("DELETE FROM `#__components` WHERE `admin_menu_link` = 'option=com_sef&controller=sitemap' LIMIT 1");

// Add new menu items
$this->_addSQL("INSERT INTO `#__components`(`name`, `link`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `params`, `enabled`) VALUES ".
               " ('Manage Meta Tags', '', '{$menuid}', 'option=com_sef&controller=metatags', 'Manage Meta Tags',  'com_sef',  '6', 'components/com_sef/assets/images/icon-16-manage-tags.png', '', '1')".
               ",('SiteMap',          '', '{$menuid}', 'option=com_sef&controller=sitemap',  'SiteMap',           'com_sef',  '6', 'components/com_sef/assets/images/icon-16-manage-sitemap.png', '', '1')"
               );
