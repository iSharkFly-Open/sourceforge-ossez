<?php
# @version $Id: administator/components/com_apoll/views/config/tmpl/default.php
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


defined('_JEXEC') or die('Restricted access'); 

JToolBarHelper::title(  JText::_( 'Apoll configuration'));
JToolBarHelper::custom( 'saveConfig', 'save.png', 'save.png', 'Save', false, false );
JToolBarHelper::cancel();

jimport('joomla.html.pane');
$tabs = & JPane::getInstance('tabs');
echo $tabs->startPane("config");
echo $tabs->startPanel(JText::_('CONFIGURATION'),"Configuration");
	
?>
<form name="adminForm" method="post">
	<label> 
	<?php echo JText::_('When uninstalling, drop the Apoll database?'); ?>
	</label><?php echo 
	JHTML::_( 'select.booleanlist',  'drop', 'class="inputbox"', $this->drop ); ?>
	
<input type="hidden" name="task" value="" />
<input type="hidden" name="option" value="com_apoll" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>
<p>
<?php
echo $tabs->endPanel();

echo $tabs->startPanel(JText::_('Import'),"Import polls from Joomla! default poll component");
echo "<h2>".JText::_('Import polls from Joomla! default poll component');
echo "</h2>";
echo JText::sprintf('You have created %u polls with Apoll component', $this->apolls);
echo "<br />";
echo JText::sprintf('You have created %u polls with native Joomla 1.5 Poll component', $this->jpolls);
echo "<br />";
echo JText::_('Click import button to import polls from the native Joomla poll component')."<br />";
?>
<h3><a href="index.php?option=com_apoll&task=importPolls" ><?php echo JText::_('Import'); ?></a></h3>
</p>
<?php echo $tabs->endPanel();
echo $tabs->startPanel(JText::_('Joomfish!'),"Install Joomfish files");

?>
<h2>
<?php echo Jtext::_('Install Apoll contentelement files for easy translation of polls and options with Joomfish'); ?> </h2>
<?php 
if( !$this->joomfish) {
	echo Jtext::_('Joomfish component is not found on your system');
} else {
	if($this->apollFilesInstalled) {
		echo "<img src='images/tick.png' style='float:left; margin-right:5px;'>".Jtext::_('Apoll files for Joomfish are installed')."<br />";
	} else {
		echo "<img src='images/publish_x.png' style='float:left; margin-right:5px;'>".Jtext::_('Apoll files for Joomfish are not installed')."<br /><br />";
		if($this->apollFilesPresent) {
		echo "<h3><a href=\"index.php?option=com_apoll&task=installJoomfishFiles\">".Jtext::_('Install')."</a></h3>";
		} else {
			echo "<img src='images/publish_x.png' style='float:left; margin-right:5px;'>".Jtext::_('Apoll files for Joomfish! are not found. You must manualy download and install them')."<br /><a href=\"http://www.afactory.org/downloads\" target=\"_blank\">Download</a>";		
		}
	}

} ?>

<?php echo $tabs->endPanel();
?>