<?php
# @file: components/com_apoll/views/apoll/tmpl/default_chart.php
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
defined('_JEXEC') or die('Restricted access'); ?>

<table class="pollstableborder" cellspacing="0" cellpadding="0" border="0" style="martin-top:10px;">
<?php 
$k=0; $i=0;
foreach($this->options as $option) : ?>
<tr class="sectiontableentry2">
    <td width="100%" colspan="2" style="font-size:<?php echo $this->params->get('optionsFontSize'); ?>px;">
        <?php echo $option->text; ?>
    </td>
</tr>
<tr class="sectiontableentry1">
    <td>
        <?php if ($this->params->get('show_hits')) { ?> 
            <strong><?php echo JText::_('Votes'); echo ":&nbsp;".$option->hits; ?></strong>
        <?php } ?>
    </td>
    <td width="<?php echo$this->params->get('chartX'); ?>" >
    <div style="width:100%; border:<?php echo $this->params->get('bgBarBorder'); ?>; background:#<?php echo$this->params->get('bgBarColor'); ?>; height:<?php echo$this->params->get('barHeight'); ?>px;">
    <div id="apoll_bar<?php echo $i; ?>" style="height:<?php echo$this->params->get('barHeight')-2; ?>px; width:<?php echo $option->percent; ?>%; float:left; background-color:#<?php echo $option->color ?>; border:<?php echo $this->params->get('barBorder'); ?> "></div><span style="float:left; padding-left:3px;"><?php echo $option->percent; ?>%</span>&nbsp;</div>
    </td>
</tr> 
<? $k= 1-$k; $i++; ?>
<?php endforeach; ?>
</table>