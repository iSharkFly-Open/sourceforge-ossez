<?php
# @version $Id: administator/components/com_apoll/views/config/view.html.php
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

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

class ApollsViewConfig extends JView {
	
	function display($tpl = null)
	{
		$drop	= & $this->get( 'Data');
		$jpolls	= & $this->get( 'Jpolls');
		$apolls	= & $this->get( 'Apolls');
		$joomfish= & $this->get( 'JoomfishInstalled');
		$apollFilesInstalled = & $this->get('ApollFilesInstalled');
		$apollFilesPresent = & $this->get('ApollFilesPresent');
		
		$this->assignRef('drop',	 $drop);
		$this->assignRef('jpolls',	 $jpolls);
		$this->assignRef('apolls', 	 $apolls);
		$this->assignRef('joomfish', $joomfish);
		$this->assignRef('apollFilesInstalled', $apollFilesInstalled);
		$this->assignRef('apollFilesPresent', $apollFilesPresent);
		
		parent::display($tpl);
	}
}
