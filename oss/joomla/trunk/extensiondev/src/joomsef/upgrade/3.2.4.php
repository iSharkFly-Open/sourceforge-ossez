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

$this->_addFileOp(DS.'administrator'.DS.'components'.DS.'com_sef'.DS.'classes'.DS.'seftools.php', 'upgrade', DS.'admin'.DS.'classes'.DS.'seftools.php');

// Language files

// Frontend files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef.router.php', 'upgrade', DS.'site'.DS.'sef.router.php');

// Extension files
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.php', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.php');
$this->_addFileOp(DS.'components'.DS.'com_sef'.DS.'sef_ext'.DS.'com_content.xml', 'upgrade', DS.'site'.DS.'sef_ext'.DS.'com_content.xml');

?>
