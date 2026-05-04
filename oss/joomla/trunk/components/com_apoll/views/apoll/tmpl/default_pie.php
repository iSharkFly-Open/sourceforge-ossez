<?php
# @file: components/com_apoll/views/apoll/tmpl/default_pie.php
# @package: aPoll
# ===================================================
# @author
# Name: Hristo Genev
# Email: harrygg@gmail.com
# Url: http://www.afactory.org
# ===================================================
# @copyright Copyright (C) 2008 aFactory.org All rights reserved.
# @license see http://www.gnu.org/licenses/lgpl.html GNU/LGPL.
# You can use, redistribute this file and/or modify
# it under the terms of the GNU Lesser General Public License as published by
# the Free Software Foundation.
# License http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL, see LICENSE.php

// no direct access
defined('_JEXEC') or die('Restricted access'); 

$document =& JFactory::getDocument();
$document->addScriptDeclaration($this->js);
$document->addScript(JURI::base().'media/system/js/json.js');   
?>
<div id="my_apoll">         
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="graph-2" width="<?php echo $this->params->get('pieX'); ?>" height="<?php echo $this->params->get('pieY'); ?>">
	    <param name="wmode" value="transparent" /> 
	    <param name="movie" value="<?php echo JURI::base().'media/system/swf/open-flash-chart.swf'; ?>" />
	    
	    <!--[if !IE]>-->
	    <object type="application/x-shockwave-flash" data="<?php echo JURI::base().'media/system/swf/open-flash-chart.swf'; ?>" name="open-flash-chart" width="<?php echo $this->params->get('pieX'); ?>" height="<?php echo $this->params->get('pieY'); ?>">
	    <!--<![endif]-->
	
	        <p>No Flash Player Installed</p>
	    <!--[if !IE]>-->   
	    </object>
	    <!--<![endif]-->
	</object>
</div>