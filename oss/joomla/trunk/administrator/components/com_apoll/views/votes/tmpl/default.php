<?php
# @file: administator/components/com_apoll/views/votes/tmpl/default.php
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


defined('_JEXEC') or die('Restricted access'); 

$title = ($this->title)? JText::_( 'Votes manager for:').$this->title : JText::_( 'Please select a Poll from the dropdown');
JToolBarHelper::title($title);
JToolBarHelper::back();
JToolBarHelper::deleteList(JText::_('Are you sure you want to delete this votes'), "deleteVotes", "Delete", true);

?>

<form name="adminForm" method="post">
<table>
	<tr>
		<td align="left" width="100%">
			<?php echo JText::_( 'Filter by users' ); ?>:
			<input type="text" name="search" id="search" value="<?php echo $this->lists['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
		</td>
		<td>
	<?php echo JText::_('View results for:'); ?>
	<?php echo $this->lists['apolls']; ?>
		</td>
	</tr>
</table>
<table class="adminlist" align="center" width="90%" cellspacing="2" cellpadding="2" border="0" >
	<thead>
	<tr>
		<th width="1%"><?php echo JText::_( 'NUM' ); ?></th>
		<th width="1%"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->row); ?>);" />
			</th>
		<th width="10%"><?php echo JHTML::_('grid.sort',   'Date', 'v.date', @$this->lists['order_Dir'], @$this->lists['order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort',   'User', 'u.name', @$this->lists['order_Dir'], @$this->lists['order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort',   'IP', 'ip', @$this->lists['order_Dir'], @$this->lists['order'] ); ?></th>
		<th width="80%"><?php echo JHTML::_('grid.sort',   'Option', 'o.text', @$this->lists['order_Dir'], @$this->lists['order'] ); ?></th>
	</tr>
	</thead>
	<?php $i = 0;
	foreach ($this->row as $vote) : 
		$checkBox = JHTML::_('grid.id', $i++, $vote->id);
	?>
		<tr class="row<?php echo $i%2; ?>">
			<td valign="top" height="30"><?php echo $i; ?></td>
			<td valign="top"><?php echo $checkBox; ?></td>
			<td valign="top"><?php echo $vote->date; ?></td>
			<td valign="top"><?php echo $vote->name; ?></td>
			<td valign="top"><?php echo $vote->ip; ?></td>
			<td valign="top"><?php echo $vote->text; ?></td>
		</tr>

<?php endforeach; ?>
	<tfoot>
		<tr>
			<td colspan="6">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>	
</table>

	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="apoll_id" value="<?php echo $this->apoll_id; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>