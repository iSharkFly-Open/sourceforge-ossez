<?php
/**
 * SEF component for Joomla! 1.5
 * Upgrade script.
 *
 * @author      $Author: David Jozefov $
 * @copyright   ARTIO s.r.o., http://www.artio.cz
 * @package     JoomSEF
 * @license     GNU/GPLv3 http://www.gnu.org/copyleft/gpl.html
 */

// Unpatch the router.php file
$path = JPATH_LIBRARIES.DS.'joomla'.DS.'application'.DS.'router.php';

$success = false;
if( is_writeable($path) ) {
    $f = file_get_contents($path);

    // Start position
    $pos = strpos($f, '// ARTIO SEF PATCH START');
    if( $pos !== false ) {
        // End string
        $matches = array();
        if( preg_match('|// ARTIO SEF PATCH END\s*|', $f, $matches, null, $pos) > 0 ) {
            // End position
            $pos2 = strpos($f, $matches[0], $pos);
            if( $pos2 !== false ) {
                // Remove the patch
                $f = substr($f, 0, $pos) . substr($f, $pos2 + strlen($matches[0]));
                file_put_contents($path, $f);
                $patch = 'router.php unpatched successfully.';
                $success = true;
            }
        }
    }
}

if( !$success ) {
    $patch = 'router.php could not be unpatched. Please, remove the code between the \'// ARTIO SEF PATCH START\' and \'// ARTIO SEF PATCH END\' lines of JRouter::getInstance() function.';
}

echo '<p class="message">'.$patch.'</p>';

?>