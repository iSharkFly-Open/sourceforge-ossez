<?php 
# @version $Id: administator/components/com_apoll/views/result/tmpl/default.php
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

$document =& JFactory::getDocument();
$document->setMimeEncoding('text/xml');

echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo $this->xml;