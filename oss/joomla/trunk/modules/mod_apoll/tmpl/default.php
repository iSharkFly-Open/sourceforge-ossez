<?php
# @file: modules/mod_apoll/tmpl/default.php
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
$document->addStyleDeclaration("div#apoll_loading_".$apoll->id." {
	background: url(media/system/images/mootree_loader.gif) 0% 50% no-repeat; 
	width:100%; 
	height:20px; 
	padding: 4px 0 0 20px; 
}
");
?>

<div class="apoll<?php echo $params->get('moduleclass_sfx'); ?>" style="width:95%; border:none; padding:1px;">

<?php if ($params->get('show_poll_title')) : ?>
    <h4 class="apoll_mod_title"><?php echo $apoll->title; ?></h4>
<?php endif; ?>

<div id="apolldiv_<?php echo $apoll->id;?>">

<?php if ($display_poll) { ?>
<form action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="apoll_vote_<?php echo $apoll->id;?>" id="apoll_vote_<?php echo $apoll->id;?>">
<?php for ($i = 0, $n = count($options); $i < $n; $i ++) { ?>
	<label for="voteid<?php echo $options[$i]->id;?>" class="<?php echo $tabclass_arr[$tabcnt].$params->get('moduleclass_sfx'); ?>" style="display:block; padding:2px;">
		<input type="radio" name="voteid" id="voteid<?php echo $options[$i]->id;?>" value="<?php echo $options[$i]->id;?>" alt="<?php echo $options[$i]->id;?>" <?php echo $disabled; ?> />
			<?php echo $options[$i]->text; ?>
	</label>
	<?php $tabcnt = 1 - $tabcnt; } 
			
			//show messages box
			if($params->get('show_msg')) : 
				echo '<div id="mod_apoll_messages_'.$apoll->id.'" style="margin:5px;">'.JText::_($msg);
				if($params->get('show_detailed_msg')) echo " ".$details;
				echo '</div>';
			endif;
	?>
	<div style="padding:2px;" id="apoll_buttons_<?php echo $apoll->id;?>" >	
	<input type="submit" id="submit_vote_<?php echo $apoll->id; ?>" name="task_button" class="button" value="<?php echo JText::_('Vote'); ?>" <?php echo $disabled; ?> />
	</div>	
	<div id="apoll_loading_<?php echo $apoll->id;?>" style="display:none;"><?php echo JText::_('Processing ...'); ?>
	</div>		

	<input type="hidden" name="option"	 value="com_apoll" />
	<input type="hidden" name="id" 		 value="<?php echo $apoll->id;?>" />
<?php if($params->get('ajax')) : ?>
    <input type="hidden" name="format"	 value="raw" />
    <input type="hidden" name="view"  	 value="apoll" />
<?php else : ?>
	<input type="hidden" name="task" value="vote" />
<?php endif; 
	echo "<div>".JHTML::_( 'form.token' )."</div>";  ?>
</form>

<?php if($params->get('ajax')) {
// add mootools
JHTML::_('behavior.mootools');

$updateValue = '';

for ($i=0; $i<count($results); $i++) {
	if($params->get('only_one_color')) {
		$background_color = $params->get('apoll_bars_color');
	} else {
		$background_color = "' + options.item($i).attributes[3].nodeValue + '";	
	}

	$updateValue .= "<div style=\"width:100%\"><div style=\"padding: 3px;\">' + text.item($i).firstChild.nodeValue + ' - ' + options.item($i).attributes[1].nodeValue + '%</div><div class=\"apoll_module_bar_holder\" id=\"apoll_module_bar_holder".$i."\"  style=\"width: 100%; height: 10px; padding:1px; border:1px solid #".$params->get('apoll_bars_border_color').";\"><div id=\"apoll_module_bar'+options.item($i).attributes[0].nodeValue+'\" style=\"background:#$background_color; width:' + options.item($i).attributes[1].nodeValue + '%; height:10px;\"></div></div></div>";
}

	if($params->get('show_total')) { 
	$updateValue .= "<br /><b>".JText::_('Total votes')."</b>: ' + voters.item(0).firstChild.nodeValue + '";
	}
$js = "
/* <![CDATA[ */
window.addEvent('domready', function()
    {
		$('apoll_vote_".$apoll->id."').addEvent('submit', function(e) {
				// Prevent the submit event
			    new Event(e).stop();

				var options = $('apoll_vote_".$apoll->id."').getElements('input[name=voteid]');

				var nothing_selected = 1;				
				options.each(function(item, index){
					if(item.checked==1) {nothing_selected = 0;}
				});							
				if (nothing_selected) {
					alert('".JText::_('Please select an option')."');
					return false;
				} else {

						$('submit_vote_".$apoll->id."').disabled = 1;
						$('apoll_loading_".$apoll->id."').setStyle('display','');

						// Update the page
						this.send({ 
						onComplete: function(response, responseXML) 
						{
							// get the XML nodes
							var root   = responseXML.documentElement;
							var options   = root.getElementsByTagName('option');
							var text   = root.getElementsByTagName('text');
							//var percentages  = root.getElementsByTagName('percentages');
							var voters   = root.getElementsByTagName('voters');
							
							// prepare the XHTML
							var updateValue = '".$updateValue."';
								
							// update the page element 'update'
							//$('apolldiv_".$apoll->id."').removeClass('ajax-loading');
							$('apolldiv_".$apoll->id."').empty().setHTML(updateValue);
                            var apollSlide = new Fx.Slide('apoll_comp_form');
                        	apollSlide.slideOut();
						}});
				}
        });  
    });/* ]]> */";


$document->addScriptDeclaration( $js );


}
//If user has voted 
	} else { 
	
		foreach ($results as $row) :
			$percent = ($row->votes)? round((100*$row->hits)/$row->votes, 1):0;
			$width = ($percent)? $percent:2; 
			if($params->get('only_one_color')) 
				$background_color = $params->get('apoll_bars_color');
			else 
				$background_color = $row->color; ?>
			
			<div>
				<div style="padding:3px;"><?php echo $row->text." - ".$percent; ?>%</div>
				<div style="width:100%; height:10px; padding:1px; border:1px solid #<?php echo $params->get('apoll_bars_border_color'); ?>;">
					<div style="width: <?php echo $width; ?>%; height:10px;background:#<?php echo $background_color; ?>;"></div>
				</div>
			</div>
<?php  endforeach;
			if($params->get('show_total')) 
				echo "<br /><b>".JText::_('Total votes')."</b>: ".$row->votes;
			
			if($params->get('show_msg')) : 
				echo '<div id="mod_apoll_messages_'.$apoll->id.'" style="margin:5px;">'.JText::_($msg);
				if($params->get('show_detailed_msg')) { 
					echo " ".$details;
				}
				echo '</div>';
			endif;
 } ?>

<!-- End of #apolldiv -->
</div>
<?php if (($params->get('show_view_details')) || ($params->get('rel_article_window'))) { ?>
<div id="apoll_links" style="padding-top:5px; ">

	<?php if ($params->get('show_view_details')) : ?>
	<a class="apoll_result_link" href="<?php echo JRoute::_('index.php?option=com_apoll&view=apoll&id='.$slug.$itemid); ?>"><?php echo JText::_('View details'); ?></a><br />
	<?php endif; ?>
	
	<?php if ($params->get('show_rel_article')) : ?>
	<a class="apoll_result_link" target="<?php echo $params->get('rel_article_window'); ?>" href="<?php echo JRoute::_($params->get('rel_article')); ?>">
		<?php echo JText::_('read the related article >>'); ?></a>
	<?php endif; ?>
<?php } ?>

</div>
<!-- End of module .apoll -->
</div>