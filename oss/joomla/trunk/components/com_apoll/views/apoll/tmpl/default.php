<?php 
# @file: components/com_apoll/views/apoll/tmpl/default.php
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


<?php if ($this->params->get( 'show_title', 1)) : ?>
<div class="componentheading<?php echo $this->params->get( 'pageclass_sfx' ) ?>">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</div>
<?php endif; ?>

<div class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ) ?>">

<?php if ($this->allowToVote) : ?>
<div id="apoll_comp_form">
	<form action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="apoll_form2">
	<?php $k=0; $i=0; $tabcnt = 0;
	    $tabclass = array ('sectiontableentry2', 'sectiontableentry1');
	    foreach($this->options as $option) : ?>
	    <label for="voteid<?php echo $option->id;?>" class="apoll<?php echo $tabclass[$tabcnt]; ?>" style="display:block; padding:2px;">
	        <input type="radio" name="voteid" id="voteid<?php echo $option->id;?>" value="<?php echo $option->id;?>" alt="<?php echo $option->id;?>" />
	            <?php echo $option->text; ?>
	    </label>
	    <?php $tabcnt = 1 - $tabcnt; 
	    endforeach; 
	    
	    $itemid = isset($items[0]) ? '&Itemid='.$items[0]->id : ''; ?>
	    
	    <div style="padding:2px; text-align:left;">    
	    	<input type="submit" name="task_button" class="button" value="<?php echo JText::_('Vote'); ?>" />
	    </div>    
	    
	
	    <input type="hidden" name="option" value="com_apoll" />
	    <input type="hidden" name="task" value="vote" />
	    <input type="hidden" name="id" value="<?php echo $this->apoll->id;?>" />
	    <?php echo JHTML::_( 'form.token' ); ?>
	</form>
</div>
<br />

<?php 
	//if users are not allowed to vote for some reason (voted or not registered) show warning    
	else : 
	    if ($this->params->get('show_component_msg')) : 
	    	echo "<p>".JText::_($this->msg)."</p>"; 
	    endif;
	endif; ?>

<?php if($this->params->get('show_dropdown')) : ?>
<form action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="apoll" id="apoll">
<div class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ) ?>">
    <label for="id">
        <?php echo JText::_('View results for:'); ?>
        <?php echo $this->lists['apolls']; ?>
    </label>
</div>
</form>
<?php endif; ?>
<br />
<b><?php echo JText::_( 'Statistics' ); ?>:</b>
<br />
<br />
<?php     
    // set the correct view
    if (!$this->params->get('show_what')) : 
        echo $this->loadTemplate('chart');
    else :
        echo $this->loadTemplate('pie');
    endif;
?>
<br />
<table cellspacing="0" cellpadding="0" border="0">
<tbody>
    <?php if ($this->params->get('show_voters')) : ?>
    <tr>
        <td class="smalldark">
            <?php echo JText::_( 'Number of Voters' ); ?>
        </td>
        <td class="smalldark">
            &nbsp;:&nbsp;
            <?php if (isset($this->options[0])) echo $this->options[0]->voters; ?>
       </td>
    </tr>
    <?php endif; ?>
    
    <?php if ($this->params->get('show_times')) : ?>
    <tr>
        <td class="smalldark">
            <?php echo JText::_( 'Start' ); ?>
        </td>
        <td class="smalldark">
            &nbsp;:&nbsp;
            <?php echo $this->apoll->publish_up; ?>
        </td>
    </tr>
    <tr>
        <td class="smalldark">
            <?php echo JText::_( 'End' ); ?>
        </td>
        <td class="smalldark">
            &nbsp;:&nbsp;
            <?php echo $this->apoll->publish_down; ?>
        </td>
    </tr>
    <?php endif; ?>
</tbody>
</table>
<br style="clear:both" />
</div>