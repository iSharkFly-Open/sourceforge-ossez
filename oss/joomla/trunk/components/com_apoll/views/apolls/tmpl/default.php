<?php 
# @file: components/com_apoll/views/apolls/tmpl/default.php
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

defined('_JEXEC') or die('Restricted access'); ?>
<script language="javascript" type="text/javascript">
	function tableOrdering( order, dir, task ) {
	var form = document.adminForm;

	form.filter_order.value 	= order;
	form.filter_order_Dir.value	= dir;
	document.adminForm.submit( task );
}
</script>
<?php JHTML::_('behavior.tooltip'); ?>
<h1><?php echo $this->params->get('page_title'); ?></h1>
<form action="<?php echo JFilterOutput::ampReplace($this->action); ?>" method="post" name="adminForm">
<table>
	<tr>
		<td align="left" width="100%">
			<?php if($this->params->get('show_filter_box')) :
			echo JText::_( 'Filter' ); ?>:
			<input type="text" name="search" id="search" value="<?php echo $this->lists['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
			<?php endif; ?>
		</td>
		<td nowrap="nowrap">
			<?php
		echo JText::_('Display Num') .'&nbsp;';
		echo $this->pagination->getLimitBox();
	?>
		</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
			<td width="5" height="20" style="" class="sectiontableheader">
				<?php echo JText::_('Num'); ?>
			</td>
			<td class="sectiontableheader">
				<?php echo JHTML::_('grid.sort','Poll Title', 'm.title', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td>
				<?php if($this->params->get('show_start_date')) { ?>
			<td width="10%" class="sectiontableheader" style="text-align:center;" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort','Start', 'm.publish_up', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td><?php } ?>						
			<?php if($this->params->get('show_end_date')) { ?>
			<td width="10%" class="sectiontableheader" style="text-align:center;" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort','End', 'm.publish_down', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td><?php } ?>					
			<?php if($this->params->get('show_status')) { ?>
			<td width="5%" class="sectiontableheader" style="text-align:center;" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort','Status', 'status', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td><?php } ?>				
			<?php if($this->params->get('show_num_voters')) { ?>
			<td width="5%" class="sectiontableheader" style="text-align:center;" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort','Votes', 'voters', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td><?php } ?>
				<?php if($this->params->get('show_num_options')) { ?>
			<td width="5%" class="sectiontableheader" style="text-align:center;" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort', 'Options', 'numoptions', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
			</td><?php } ?>
		</tr>
	</thead>

	<tbody>
	<?php
	$k = 0;

	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row 		= &$this->items[$i];
		//find the Itemid that correspondents to the link if any.
		$component 	=& JComponentHelper::getComponent('com_apoll');
		$menus		=& JApplication::getMenu('site', array());
		$menu_items	= $menus->getItems('componentid', $component->id);
		$itemid		= null;
		
		if (isset($menu_items)) {
			foreach ($menu_items as $item) {
				if ((@$item->query['view'] == 'apoll') && (@$item->query['id'] == $row->id)) {
					$itemid = '&Itemid='.$item->id;
					break;
				}			
			}
		}
		$link = JRoute::_( 'index.php?option=com_apoll&view=apoll&id='.$row->slug.$itemid); 
	
	?>
		<tr class="sectiontableentry<?php echo $k + 1; ?>">
			<td><?php echo $this->pagination->getRowOffset($i); ?></td>
			<td><span class="hasTip" title="<?php echo JText::_( 'View Poll' );?>">
			<a href="<?php echo $link;  ?>"><?php echo $row->title; ?></a></span></td>
			<?php if($this->params->get('show_start_date')) { ?>
			<td align="center"><?php echo JFactory::getDate($row->publish_up)->toFormat($this->params->get('date_format'))
; ?></td>
			<?php } ?>	
			<?php if($this->params->get('show_end_date')) { ?>
			<td><?php echo JFactory::getDate($row->publish_down)->toFormat($this->params->get('date_format'))
; ?></a></td>
			<?php } ?>				
			<?php if($this->params->get('show_status')) { ?>
			<td align="center" style="text-transform:capitalize;">
			<?php if($this->params->get('show_status_as')) { ?>
			<img src="<?php echo JURI::base(); ?>media/system/images/apoll-<?php echo $row->status; ?>.gif" />
			<?php } else {
			echo JText::_($row->status);
				} ?></td>			
			<?php 
			}
			if($this->params->get('show_num_voters')) { ?>
			<td align="center"><?php echo $row->voters; ?></td>
			<?php } ?>
			<?php if($this->params->get('show_num_options')) { ?>
			<td align="center"><?php echo $row->numoptions; ?></td>
			<?php } ?>
		</tr>
		<?php $k = 1 - $k;
	}	?>
	</tbody>
	</table>
	
		<div>
				<?php echo $this->pagination->getPagesLinks(); ?>
		</div>
		<div class="pagecounter">
				<?php echo $this->pagination->getPagesCounter(); ?>
		</div>

	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<br />