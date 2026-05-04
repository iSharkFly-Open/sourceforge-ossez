<?php
# @version $Id: administator/components/com_apoll/views/apoll/tmpl/form.php
# @package: Apoll Vote
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

defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( 'Poll' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::Preview('index.php?option=com_apoll&cid[]='.$cid[0]);
	JToolBarHelper::save();
	JToolBarHelper::apply();

	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.apolls.edit' );
	JHTML::_('behavior.calendar');
    $apoll  = $this->apoll;
    JFilterOutput::objectHTMLSafe( $apoll, ENT_QUOTES );
?>



<style type="text/css">
tr.dragable { cursor: move;background-color:#f6f6f6; }

div.color_picker {
	position:absolute;
	top:-2px; left:0;
	height: 16px; width: 16px;
	padding: 0 !important;
	border: 1px solid #ccc;
	background: url(../media/system/images/apoll-arrow.gif) no-repeat top right;
	cursor: pointer;
	line-height: 16px;
}

div#color_selector {
  width: 110px;
  position: absolute;
  border: 1px solid #598FEF;
  background-color: #EFEFEF;
  padding: 2px;
}
  div#color_custom {width: 100%; float:left }
  div#color_custom label {font-size: 95%; color: #2F2F2F; margin: 5px 2px; width: 25%}
  div#color_custom input {margin: 5px 2px; padding: 0; font-size: 95%; border: 1px solid #000; width: 65%; }

div.color_swatch {
  height: 12px;
  width: 12px;
  border: 1px solid #000;
  margin: 2px;
  float: left;
  cursor: pointer;
  line-height: 12px;
}

</style>

<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		<?php if (count( $this->options )) { ?>
		var apolloption1 = document.getElementById('apolloption<?php echo $this->options[0]->id; ?>');
		var apolloption2 = document.getElementById('apolloption<?php echo $this->options[1]->id; ?>');
		<?php } else { ?>		
		var apolloption1 = document.getElementById('apolloption1');
		var apolloption2 = document.getElementById('apolloption2');
		<?php } ?>
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation
		// check if the publish_up date is smaller than publish_down date

		var publish_up = form.publish_up.value;
		var publish_down = form.publish_down.value;
		
		publish_up = parseInt(publish_up.replace(/[ :-]/g,''));
		publish_down = parseInt(publish_down.replace(/[ :-]/g,''));

		if (publish_up>=publish_down) {
			alert("<?php echo JText::_('Please correct the start or end date of the poll'); ?>");
			form.publish_down.focus();
			return false;
		}		
		// check for empty fields
		if (form.title.value == "") {
			alert( "<?php echo JText::_( 'Poll must have a title', true ); ?>" );
			form.title.focus();
		} else if( isNaN( parseInt( form.lag.value ) ) ) {
			alert( "<?php echo JText::_( 'Poll must have a non-zero lag time', true ); ?>");
			form.lag.focus();
		}
		else if ( apolloption1.value == "" ){
			alert( "<?php echo JText::_( 'Poll must have at least 2 options', true ); ?>" );
			apolloption1.focus();
		}
		else if ( apolloption2.value == "" ){
			alert( "<?php echo JText::_( 'Poll must have at least 2 options', true ); ?>" );
			apolloption2.focus();
		
		} else {
			submitform( pressbutton );
		}
	}
</script>
<form action="index.php" method="post" name="adminForm">
		<div class="width-50" style="float:right;">
			<fieldset class="adminform">
				<legend><?php echo JText::_( 'Parameters' ); ?></legend>
<?php
jimport('joomla.html.pane');					
$pane =& JPane::getInstance('sliders');
echo $pane->startPane( 'content-pane' );
echo $pane->startPanel( JText::_( 'General' ), 'general' );
echo $this->params->render( 'params' );
echo $pane->endPanel();

echo $pane->startPanel( JText::_( 'Pie options' ), 'pieoptions' );
echo $this->params->render( 'params', 'pieoptions' );
echo $pane->endPanel();

echo $pane->startPanel( JText::_( 'Joomla default way' ), 'joomladefault' );
echo $this->params->render( 'params', 'joomladefault' );
echo $pane->endPanel();
echo $pane->endPane();
?>
				
				</fieldset>
		</div>


		

<div class="col width-50">

	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'Title' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="title" id="title" size="60" value="<?php echo $apoll->title; ?>" />
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					<?php echo JText::_( 'Alias' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="alias" id="alias" size="60" value="<?php echo $apoll->alias; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					<?php echo JText::_( 'Lag' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="lag" id="lag" size="5" value="<?php echo $apoll->lag/60; ?>" />
				<?php echo JText::_( 'hours between votes' ); ?>
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="start">
					<?php echo JText::_( 'Start' ); ?>:
				</label>
			</td>
			<td>
				<?php
				//get the time now if we are creating new poll      
				$date = &JFactory::getDate();
				$date->setOffset($mainframe->getCfg('offset'));
				$end_date = JFactory::getDate('+1 month');

				$publish_up = ($apoll->publish_up == '') ? $date->toFormat() : $apoll->publish_up;

				echo JHTML::_('calendar', $publish_up, 'publish_up', 'publish_up', '%Y-%m-%d 00:00:00'); ?>
				<?php echo JText::_( 'Date to start voting' ); ?>
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="end">
					<?php echo JText::_( 'End' ); ?>:
				</label>
			</td>
			<td>
				<?php 
                $publish_down = ( $apoll->publish_down == '' ) ? $end_date->toFormat() : $apoll->publish_down;

				echo JHTML::_('calendar', $publish_down, 'publish_down', 'publish_down', '%Y-%m-%d 00:00:00'); ?>
				<?php echo JText::_( 'Date to end voting' ); ?>
			</td>
		</tr>
		<tr>
			<td width="120" class="key">
				<?php echo JText::_( 'Published' ); ?>:
			</td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist',  'published', 'class="inputbox"', $apoll->published ); ?>
			</td>
		</tr>
		</table>
	</fieldset>
</div>


<div class="col width-50">
<?php
$document = &JFactory::getDocument();
$document->addScript('../media/system/js/jquery.js' );
$document->addScript('../media/system/js/jquery.tablednd.js' );
$document->addScript('../media/system/js/jquery.colorpicker.js' );
$document->addScript('../media/system/js/jquery.color.js' );
$document->addScript('../media/system/js/jquery.apoll.js' );
?>

	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options Drag Drop' ); ?></legend>


	<table class="admintable" id="reorder">
	<tr style=" font-weight:bold;" class="nodrag" >
		<td style="width:40px;">
		
		<a href="#" id="options-add<?php if($this->edit) echo '-extra'; ?>">
		<img src="../media/system/images/apoll-add.png" style=" margin-right:3px; border:none;" alt="<?php echo JText::_( 'Add Option' ); ?>" title="<?php echo JText::_( 'Add Option' ); ?>" /></a>
		<a href="#" id="options-remove<?php if($this->edit) echo '-extra'; ?>">
		<img src="../media/system/images/apoll-remove.png" style="margin-right:3px; border:none;" alt="<?php echo JText::_( 'Remove Option' ); ?>" title="<?php echo JText::_( 'Remove Option' ); ?>"  /></a></td>
<td><b><?php echo JText::_( 'Option' ); ?></b></td>
<td><?php echo JText::_( 'Color' ); ?></td>
<td><?php echo JText::_( 'Votes' ); ?></td>
	</tr>
	<?php

	for ($i=0, $n=count( $this->options ); $i < $n; $i++ ) { 

	?>
		<tr class="dragable" id="<?php echo $i+1; ?>" >
			<td align="center"><b><?php echo $i+1; ?></b></td>
			<td>
				<input class="inputbox checkit" type="text" name="apolloption[<?php echo $this->options[$i]->id; ?>]" id="apolloption<?php echo $this->options[$i]->id; ?>" value="<?php echo $this->options[$i]->text; ?>" size="60" />
				<input type="hidden" name="ordering[<?php echo $this->options[$i]->id; ?>]" id="ordering<?php echo $this->options[$i]->id; ?>" value="<?php echo $this->options[$i]->ordering; ?>" size="1" class="ordering" />
			</td>
			<td><div style="position:relative;">
<input type="hidden" size="7"  name="color[<?php echo $this->options[$i]->id; ?>]" id="color<?php echo $this->options[$i]->id; ?>" value="#<?php echo $this->options[$i]->color; ?>" class="colorpicker" />&nbsp;
			</div></td>
			<td align="center">
			<div class="vote"><?php echo $this->options[$i]->hits; ?></div>
			</td>
		</tr>
		<?php } 

	for (; $i < 2; $i++) {  ?>
		<tr class="dragable" id="<?php echo $i+1; ?>">
			<td align="center"><b><?php echo $i+1; ?></b></td>
			<td>
				<input class="inputbox checkit" type="text" name="apolloption[]" id="apolloption<?php echo $i+1; ?>" value="" size="60" />
				<input type="hidden" name="ordering[]" id="ordering<?=$i; ?>" value="<?=$i; ?>" class="ordering" />
				</td>
				<td><div style="position:relative;">
<input type="hidden" size="7"  name="color[]" id="color<?=$i; ?>" value="#<?php echo $this->color[$i]; ?>" class="colorpicker" />&nbsp;
				</div></td>
			<td></td>
		</tr>					
		<?php 
		 }
		?>
	</table>
	</fieldset>
	
<?php if ($this->edit) { ?>
		<div id="options-reset-box">
		<a href="#" id="options-reset">
			<?php echo JText::_( 'Reset votes' ); ?></a>
		<span style="color:red; display:none;">
		<?php echo JText::_( 'Votes will be reset when you hit Save/Apply button' ); ?></span>
		</div>
		<?php } ?>
</div>


<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" id="reset" name="reset" value="0" />
	<input type="hidden" name="option" value="com_apoll" />
	<input type="hidden" id="is_there_extra" name="is_there_extra" value="0" />
	<input type="hidden" name="id" value="<?php echo $apoll->id; ?>" />
	<input type="hidden" name="cid[]" value="<?php echo $apoll->id; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>