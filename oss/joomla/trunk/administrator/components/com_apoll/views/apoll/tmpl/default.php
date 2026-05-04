<?php 
# @version $Id: administator/components/com_apoll/views/apoll/tmpl/default.php 0001 2009-03-08 18:12
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

?>

<form>
<table align="center" width="90%" cellspacing="2" cellpadding="2" border="0" >
	<tr>
		<td class="moduleheading" colspan="2"><?php echo $this->apoll->title; ?></td>
	</tr>
	<?php foreach ($this->options as $option)
	{
		if ($option->text <> "")
		{?>
		<tr>
			<td valign="top" height="30"><input type="radio" name="apoll" value="<?php echo $option->text; ?>"></td>
			<td class="apoll" width="100%" valign="top"><?php echo $option->text; ?></td>
		</tr>
		<?php }
	} ?>
	<tr>
		<td valign="middle" height="50" colspan="2" align="center"><input type="button" name="submit" value="<?php echo JText::_( 'Vote' ); ?>">&nbsp;&nbsp;<input type="button" name="result" value="<?php echo JText::_( 'Results' ); ?>"></td>
	</tr>
</table>
</form>