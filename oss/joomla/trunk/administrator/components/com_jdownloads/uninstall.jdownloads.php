<?php
/**
 * Copyright (C) 2006-2010 YUCHENG HU
 *
 * ----------------------------------------------------------------------------------
 * HA WEBSYSTEMS
 * http://www.hawebs.net
 * http://www.tcivis.com
 *
 * Contact
 * huyuchengus@gmail.com / yuchenghu@hawebs.net
 *
 * ----------------------------------------------------------------------------------
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * GNU GENERAL PUBLIC LICENSE
 *
 * ----------------------------------------------------------------------------------
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 *
 * @return unknown_type
 */
function com_uninstall() {

	$msg = '';
	$msg = '<p align="center"><b><span style="color:#00CC00">下载目录和子目录内容未被卸载！</b></p>'
	.'<p align="center"><b><span style="color:#00CC00">文件夹 images/jdownloads/ 未被卸载！</b></p>'
	.'<p align="center"><b><span style="color:#00CC00"所有jDownloads 创建的数据表未被删除。</b></p>'
	.'<p align="center">如有必要，请手工删除JDownloads相关的数据表。</p>'
	.'<p align="center">否则，你仅可安装更新版本。</p>';
	echo $msg;
}
?>