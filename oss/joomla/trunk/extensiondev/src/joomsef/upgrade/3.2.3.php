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
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html', 'upgrade', DS.'admin'.DS.'views'.DS.'info'.DS.'tmpl'.DS.'readme.inc.html');

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'assets'.DS.'strings.php', 'upgrade', DS.'admin'.DS.'assets'.DS.'strings.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'config.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'config.php', 'upgrade', DS.'admin'.DS.'models'.DS.'config.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'models'.DS.'upgrade.php', 'upgrade', DS.'admin'.DS.'models'.DS.'upgrade.php');
$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php', 'upgrade', DS.'admin'.DS.'views'.DS.'config'.DS.'tmpl'.DS.'default.php');

// Language files

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'joomsef.php', 'upgrade', DS.'site'.DS.'joomsef.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

// Extension files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_search.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_search.xml');

?>
