<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('简体中文 (Simplified Chinese)');
if($module) {
    $module->delete();
}
?>