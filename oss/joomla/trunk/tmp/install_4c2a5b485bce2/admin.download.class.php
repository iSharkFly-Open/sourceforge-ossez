<?php
/**
* @version $Id: admin.download.class.php 5178 2009-06-29 10:15:16Z Radek Suski $
* @package: Sigsiu Online Business Index 2
* @subpackage download plugin
* ===================================================
* @author
* Name: Sigrid & Radek Suski, Sigsiu.NET
* Email: sobi@sigsiu.net
* Url: http://www.sigsiu.net
* ===================================================
* @copyright Copyright (C) 2007 Sigsiu.NET (http://www.sigsiu.net). All rights reserved.
* @license see http://www.gnu.org/copyleft/gpl.html GNU/GPL.
* SOBI2 Download Plugin is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation.
*/

defined( '_SOBI2_' ) || ( trigger_error("Restricted access", E_USER_ERROR) && exit() );
require_once(_SOBI_FE_PATH.DS."plugins".DS."download".DS."download.class.php");

class sobi_download_adm extends sobi_download {
    /**
     * Enter description here...
     *
     */
    function saveConfig() {
    	$config =& adminConfig::getInstance();
		$this->directory = sobi2Config::request( $_POST, 'directory',$this->directory );
		if($this->directory[strlen($this->directory)-1] != '/' && $this->directory[strlen($this->directory)-1] != '\\') {
			$this->directory = $this->directory.DS;
		}
		$this->directory =  str_replace(array("/", "\\") , DS, $this->directory);
    	$config->setValueInDB(addslashes( $this->directory ),"sd_directory","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'maxFileSize',$this->maxFileSize ) * 1024,"sd_maxFileSize","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'allowedFiles',$this->allowedFiles ),"sd_allowedFiles","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'ppWinH',$this->ppWinH ),"sd_ppWinH","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'ppWinW',$this->ppWinW ),"sd_ppWinW","sobi_download");
    	$config->setValueInDB(sobi2Config::request( $_POST, 'uploadImage',$this->uploadImage ),"sd_uploadImage","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'fPos',$this->fPos ),"sd_fPos","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'addLicense',$this->addLicense ),"sd_addLicense","sobi_download");
    	$config->setValueInDB(sobi2Config::request( $_POST, 'sortOrder',$this->sortOrder ),"sd_sortOrder","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'ppLicWinH',$this->ppLicWinH ),"sd_ppLicWinH","sobi_download");
    	$config->setValueInDB((int) sobi2Config::request( $_POST, 'ppLicWinW',$this->ppLicWinW ),"sd_ppLicWinW","sobi_download");
    	$aExt = sobi2Config::request( $_POST, 'allowedExt',$this->allowedExt);
    	$aExt = explode(",",$aExt);
    	$this->allowedExt = array();
    	foreach ($aExt as $ext) {
    		$ext = trim($ext);
    		if($ext) {
    			$this->allowedExt[] = $ext;
    		}
    	}
    	$aExt = implode(",",$this->allowedExt);
    	$config->setValueInDB($aExt,"sd_allowedExt","sobi_download");
    	$mimeTypes = sobi2Config::request( $_POST, 'mimeExt',array());
    	$mimeIcons = sobi2Config::request( $_POST, 'mimeIcons',array());
    	$mm = null;
    	$comma = ",";
    	for($c = 0; $c < count($mimeTypes); $c++) {
    		if(isset($mimeTypes[$c]) && isset($mimeIcons[$c])) {
    			if($c == count($mimeTypes)) {
    				$comma = null;
    			}
    			$type = trim($mimeTypes[$c]);
    			$ico = trim($mimeIcons[$c]);
    			$mm .= "{$type}={$ico}{$comma}";
    		}
    	}
    	$config->setValueInDB($mm,"sd_mimeIcons","sobi_download");
    }
    /**
     * Enter description here...
     *
     */
    function config() {
		$config =& adminConfig::getInstance();
		$v = $config->getVersion();
		$v = ereg_replace("[^0-9]", "", $v);
		if(!$v || $v < 280) {
			echo "<h4 style=\"color: rgb(255, 0, 0);\">";
			echo "This plugin required at least SOBI2 RC 2.8.0";
			echo "</h4>";
			return null;
		}
		$dd_tabs = new sobiTabs( true );
		$config->addCustomHeadTag($this->addScript());
	?>
 	<table class="adminform" width="100%" border="1">
		<tr>
			<th><?php echo $this->name;?></th>
		</tr>
		<tr>
			<td>
	<?php
				$dd_tabs->startPane("sobidd_adm");

				$dd_tabs->startTab(_SDDADM_GEN_PANE,"ddgeneral");
				$this->generalPane();
				$dd_tabs->endTab();

				$dd_tabs->startTab(_SDDADM_MIMETYPES_PANE,"ddmime");
				$this->mimeTypesPane();
				$dd_tabs->endTab();

				$dd_tabs->startTab(_SDDADM_LICENSES,"ddlic");
				$this->licensesPane();
				$dd_tabs->endTab();

				$dd_tabs->startTab(_SDDADM_INFO,"ddinfo");
				$this->infoPane();
				$dd_tabs->endTab();

				$dd_tabs->endPane();
	?>
			</td>
		</tr>
	</table>
	<?php
    }
    /**
     * Enter description here...
     *
     * @return sobi_download_adm
     */
    function sobi_download_adm() {
		parent::sobi_download();
    }
    /**
     * Enter description here...
     *
     * @return array
     */
    function getLicenses() {
    	$config =& adminConfig::getInstance();
    	$db =& $config->getDb();
		$query = "SELECT `name`, `id` FROM #__sobi2_plugin_download_licenses";
 		$db->setQuery($query);
 		return $db->loadObjectList();
    }
	/**
	 * Enter description here...
	 *
	 * @param string $sobi2Task
	 * @return boolean
	 */
	function customTask($sobi2Task) {
		switch($sobi2Task) {
			case "ddEditLic":
				$this->editLicense((int) sobi2Config::request($_REQUEST, "lid", 0));
				$ret = true;
				break;
			case "ddSaveLic":
				$this->saveLicense((int) sobi2Config::request($_REQUEST, "lid", 0));
				$ret = true;
				break;
			case "ddRemoveLic":
				$this->removeLicense((int) sobi2Config::request($_REQUEST, "lid", 0));
				$ret = true;
				break;
			default:
				$ret = false;
		}
		return $ret;
	}
	/**
	 * Enter description here...
	 *
	 * @param int $lid
	 */
	function removeLicense($lid) {
    	$config =& adminConfig::getInstance();
    	$database =& $config->getDb();
		$query = "DELETE FROM `#__sobi2_plugin_download_licenses` WHERE `id` = {$lid} LIMIT 1 ;";
		$database->setQuery($query);
		$database->query();
		$query = "UPDATE `#__sobi2_plugin_download` SET `license` = '0' WHERE `license` = '{$lid}';";
		$database->setQuery($query);
		$database->query();
		echo "<script type=\"text/javascript\">window.top.location = '{$config->liveSite}/administrator/index2.php?option=com_sobi2&task=plugins&S2_plugin=download&mosmsg="._SDDADM_LICENSE_DELETED."';</script>";
	}
	/**
	 * Enter description here...
	 *
	 */
	function infoPane() {
    ?>
 	<table class="adminform" width="100%" border="1">
		<tr class="row0">
			<th colspan="2"><?php echo _SDDADM_INFO; ?></th>
		</tr>
		<tr class="row1">
			<td colspan="2">
	      		<?php echo _SDDADM_INFO_TEMPL;?>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
	      		<?php echo _SDDADM_INFO_DTEMPL;?>
			</td>
			<td width="70%">
				<span style="font-weight: bold; color: rgb(0, 0, 0);">&lt;?php</span><span style="color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 128);">echo</span><span style="color: rgb(0, 0, 0);"> </span><span style="color: rgb(85, 85, 255);">$plugins</span><span style="color: rgb(0, 0, 0);">[</span><span style="color: rgb(221, 0, 0);">'download'</span><span style="color: rgb(0, 0, 0);">]; </span><span style="font-weight: bold; color: rgb(0, 0, 0);">?&gt;</span>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%">
	      		<?php echo _SDDADM_INFO_VTEMPL;?>
			</td>
			<td width="70%">
				<span style="font-weight: bold; color: rgb(0, 0, 0);">&lt;?php</span><span style="color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 128);">echo</span><span style="color: rgb(0, 0, 0);"> </span><span style="color: rgb(85, 85, 255);">$plugins</span><span style="color: rgb(0, 0, 0);">[</span><span style="color: rgb(221, 0, 0);">'download'</span><span style="color: rgb(0, 0, 0);">]; </span><span style="font-weight: bold; color: rgb(0, 0, 0);">?&gt;</span>
			</td>
		</tr>
	</table>
	<?php
	}
	/**
	 * Enter description here...
	 *
	 * @param int $lid
	 */
	function editLicense($lid) {
    	$config =& adminConfig::getInstance();
    	if(defined("_SOBI_MAMBO")) {
    		global $_MAMBOTS;
    		require_once(_SOBI_CMSROOT.DS."editor".DS."editor.php");
    	}
		if($lid) {
			$lic = $this->getLicense($lid);
		}
		else {
			$lic = new stdClass();
			$lic->id = 0;
			$lic->license = null;
			$lic->name = null;
			$lic->url = null;
		}
		$target  = "{$config->liveSite}/administrator/index3.php";
		$remHref = "{$config->liveSite}/administrator/index3.php?option=com_sobi2&task=ddRemoveLic&lid={$lid}";
    ?>
    <form action = "<?php echo $target;?>" method="POST" enctype="multipart/form-data">
 	<table class="adminform" width="100%" border="1">
		<tr class="row0">
			<th colspan="2"><?php echo _SDDADM_LICENSE_EDIT; ?></th>
		</tr>
		<tr class="row0">
			<td width="30%">
			<?php if($lid) { ?>
	      		<input type="button" value="<?php echo _SDDADM_LICENSE_DEL;?>" class="button" onclick="if(confirm('<?php echo _SDDADM_LICENSE_DEL_CONF;?>')){ location = '<?php echo $remHref;?>'; window.top.location.reload(); }"/>
	      	<?php } ?>
			</td>
			<td width="70%">
				<input type="submit" value="<?php echo _SDDADM_LICENSE_SAVE;?>" class="button" style="float:right;"/>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
	      		<?php echo _SDDADM_LICENSE_TITLE;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:left;" name="licName" value="<?php echo $lic->name; ?>" size="50" maxlength="150"/>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
	      		<?php echo _SDDADM_LICENSE_URL;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:left;" name="licUrl" value="<?php echo $lic->url; ?>" size="50" maxlength="150"/>
			</td>
		</tr>
		<tr class="row1" >
			<td width="30%" colspan="2">
		      	<span class="editlinktip">
		      		<?php echo sobi2bridge::editorArea("licText", $lic->license, 'licText', '100%;', '400', '60', '20' );?>
		      	</span>
			</td>
		</tr>
	</table>
	<input type="hidden" name="option" value="com_sobi2"/>
	<input type="hidden" name="task" value="ddSaveLic"/>
	<input type="hidden" name="lid" value="<?php echo $lid;?>"/>
	</form>
	<?php
	}
	/**
	 * Enter description here...
	 *
	 * @param int $lid
	 */
	function saveLicense($lid) {
    	$config =& adminConfig::getInstance();
    	$database =& $config->getDb();
		$licName = sobi2Config::request($_POST, "licName", "No Name");
		$licUrl = sobi2Config::request($_POST, "licUrl", null);
		$licText = sobi2Config::request($_POST, "licText", null, _MOS_ALLOWHTML);
		if($lid) {
			$query = "UPDATE `#__sobi2_plugin_download_licenses` SET `name` = '{$licName}', `license` = '{$licText}', `url` = '{$licUrl}' WHERE `id` = {$lid} LIMIT 1 ;";
		}
		else {
			$query = "INSERT INTO `#__sobi2_plugin_download_licenses` ( `id` , `name` , `license` , `url` ) VALUES ( NULL , '{$licName}', '{$licText}', '{$licUrl}');";
		}
		$database->setQuery($query);
		$database->query();
		if(!$lid) {
			$query = "SELECT MAX(`id`) FROM `#__sobi2_plugin_download_licenses`";
			$database->setQuery($query);
			$lid = $database->loadResult();
		}
		echo "<script type=\"text/javascript\">window.top.location = '{$config->liveSite}/administrator/index2.php?option=com_sobi2&task=plugins&S2_plugin=download&mosmsg="._SDDADM_LICENSE_SAVED."';</script>";
	}
    /**
     * Enter description here...
     *
     * @param int $lid
     * @return string
     */
    function getLicense($lid) {
    	$config =& adminConfig::getInstance();
    	$database =& $config->getDb();
		$query = "SELECT `name`, `license`, `url` FROM #__sobi2_plugin_download_licenses WHERE `id` = {$lid}";
 		$database->setQuery($query);
 		$l = null;
		if( !$config->forceLegacy && class_exists( "JDatabase" ) ) {
			$l = $database->loadObject();
		}
    	else {
    		$database->loadObject( $l );
    	}
		if( $database->getErrorNum() ) {
			$config->logSobiError( "Download plugin. DB reports: ".$database->stderr() );
		}
 		return $l;
    }
    /**
     * Enter description here...
     *
     */
    function licensesPane() {
    	$config =& adminConfig::getInstance();
    	$licenses = $this->getLicenses();
    	$c = 0;
    	$addNew = "onclick=\"showPopWin('{$config->liveSite}/administrator/index3.php?option=com_sobi2&task=ddEditLic&lid=0', 750, 550, null);\""
    ?>
 	<table class="adminform" width="100%" border="1">
		<tr class="row0">
			<th><?php echo _SDDADM_LICENSES; ?> &nbsp; <input type="button" value="<?php echo _SDDADM_LICENSE_ADD;?>" class="button" <?php echo $addNew;?>/></th>
		</tr>
		<?php if($licenses) { ?>
		<?php
		foreach ($licenses as $license) {
			$href = "<a href=\"javascript:void(0);\" onclick=\"showPopWin('{$config->liveSite}/administrator/index3.php?option=com_sobi2&task=ddEditLic&lid={$license->id}', 750, 550, null);\">{$license->name}</a>"
		?>
		<tr class="row<?php echo $c%2; $c++;?>">
			<td width="30%"><?php echo $href; ?></td>
		</tr>
		<?php } ?>
		<?php } ?>
	</table>
	<?php
    }
    /**
     * Enter description here...
     *
     */
    function mimeTypesPane() {
    ?>
    <script type="text/javascript">
    	var rowStyle = 0;
    	function addMimeType() {
			var ext = document.createElement("td");
			ext.innerHTML = '<input type="text" class="text_area" style="text-align:left;" name="mimeExt[]" value="" size="10" maxlength="150"/>';
			var ico = document.createElement("td");
			ico.innerHTML = '<input type="text" class="text_area" style="text-align:left;" name="mimeIcons[]" value="" size="20" maxlength="150"/>';
			var row = document.createElement("tr");
			row.appendChild(ext);
			row.appendChild(ico);
			row.className = "row"+rowStyle;
			var dummy = document.getElementById("dummyRow");
			dummy.parentNode.insertBefore(row,dummy);
			rowStyle = rowStyle ? 0: 1;
    	}
    </script>
 	<table class="adminform" width="100%" border="1">
		<tr class="row0">
			<th colspan="2">
				<?php echo _SDDADM_MIMETYPES; ?>
			</th>
		</tr>
		<tr class="row0">
			<td colspan="2">
				<input type="button" onclick="addMimeType();" class="button" value="<?php echo _SDDADM_MIMETYPES_ADD;?>"/>
				<?php echo _SDDADM_MIMETYPES_EXPL; ?>
			</td>
		</tr>
		<tr class="row0">
			<th>
				<?php echo _SDDADM_MIMETYPES_EXT; ?>
			</th>
			<th>
				<?php echo _SDDADM_MIMETYPES_ICO; ?>
			</th>
		</tr>
		<tr id="dummyRow" style="display:none;"><td colspan="2"></td></tr>
		<?php
		$c = 0;
		foreach ($this->mimeIcons as $ext => $file) {
			$c++;
			if($ext && $file) {
			?>
			<tr class="row<?php echo $c%2;?>">
				<td width="15%">
					<?php echo $ext; ?>
					<input type="hidden" name="mimeExt[]" value="<?php echo $ext;?>" />
				</td>
				<td width="85%">
					<input type="text" class="text_area" style="text-align:left;" name="mimeIcons[]" value="<?php echo $file; ?>" size="20" maxlength="150"/>
				</td>
			</tr>
		<?php }
		} ?>
	</table>
	<?php
    }
    /**
     * Enter description here...
     *
     */
    function generalPane() {
    	$config =& adminConfig::getInstance();
    ?>
 	<table class="adminform" width="100%" border="1">
		<tr class="row0">
			<th colspan="2"><?php echo _SDDADM_GEN_PANE; ?></th>
		</tr>

		<tr class="row0">
			<td width="30%">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_DIRECTORY_EXPL),addslashes(_SDDADM_GEN_DIRECTORY),'','',_SDDADM_GEN_DIRECTORY, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:left;" name="directory" value="<?php echo $this->directory ?>" size="30" maxlength="150"/>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_ALLOWED_FILES_EXPL),addslashes(_SDDADM_GEN_ALLOWED_FILES),'','',_SDDADM_GEN_ALLOWED_FILES, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="allowedFiles" value="<?php echo $this->allowedFiles ?>" size="5" maxlength="10"/>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%" style="vertical-align: top;">
		      	<?php echo _SDDADM_GEN_MAX_FILESIZE; ?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="maxFileSize" value="<?php echo round($this->maxFileSize/1024) ?>" size="10" maxlength="150"/> kB.
				<?php
					echo _SDDADM_GEN_MAX_FILESIZE_PHP;
					echo "&nbsp;";
					echo ini_get( 'upload_max_filesize' );
				?>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%" style="vertical-align: top;">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_ALLOWED_FILE_EXT_EXPL),addslashes(_SDDADM_GEN_ALLOWED_FILE_EXT),'','',_SDDADM_GEN_ALLOWED_FILE_EXT, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<textarea class="text_area"  name="allowedExt" cols="50" rows="5"/><?php echo $config->getValueFromDB("sobi_download","sd_allowedExt"); ?></textarea>
			</td>
		</tr>
		<tr class="row0">
			<th colspan="2"><?php echo _SDDADM_GEN_PP_WIN_HEADER; ?></th>
		</tr>
		<tr class="row0">
			<td width="30%">
	      		<?php echo _SDDADM_GEN_PP_WIN_H ;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="ppWinH" value="<?php echo $this->ppWinH ?>" size="5" maxlength="10"/>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%">
	      		<?php echo _SDDADM_GEN_PP_WIN_W ;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="ppWinW" value="<?php echo $this->ppWinW ?>" size="5" maxlength="10"/>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_UPLOAD_BUTTON_IMG_EXPL),addslashes(_SDDADM_GEN_UPLOAD_BUTTON_IMG),'','',_SDDADM_GEN_UPLOAD_BUTTON_IMG, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:left;" name="uploadImage" value="<?php echo $this->uploadImage ?>" size="70" maxlength="150"/>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_UPLOAD_BUTTON_POS_EXPL),addslashes(_SDDADM_GEN_UPLOAD_BUTTON_POS),'','',_SDDADM_GEN_UPLOAD_BUTTON_POS, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="fPos" value="<?php echo $this->fPos ?>" size="5" maxlength="10"/>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
		      	<span class="editlinktip">
		      		<?php echo sobiHTML::toolTip(addslashes(_SDDADM_GEN_ADD_LIC_EXPL),addslashes(_SDDADM_GEN_ADD_LIC),'','',_SDDADM_GEN_ADD_LIC, '#',0 );?>
		      	</span>
			</td>
			<td width="70%">
				<?php echo sobiHTML::yesnoRadioList( 'addLicense', 'class="text_area"', $this->addLicense ); ?>
			</td>
		</tr>
		<tr class="row0">
			<th colspan="2"><?php echo _SDDADM_GEN_DOWNLOAD_HEADER; ?></th>
		</tr>
		<tr class="row1">
			<td width="30%">
	      		<?php echo _SDDADM_DOWNLOAD_SORTBY ;?>
			</td>
			<td width="70%">
					<?php
						$sortMethotds = array();
						$sortMethotds[] 	= sobiHTML::makeOption( 'filename', _SDDADM_DOWNLOAD_SORTBY_NAME);
						$sortMethotds[] 	= sobiHTML::makeOption( 'fileext', _SDDADM_DOWNLOAD_SORTBY_EXT);
						$sortMethotds[] 	= sobiHTML::makeOption( 'filesize', _SDDADM_DOWNLOAD_SORTBY_SIZE);
						$sortMethotds[] 	= sobiHTML::makeOption( 'added', _SDDADM_DOWNLOAD_SORTBY_DATE);
						$sortMethotds[] 	= sobiHTML::makeOption( 'counter', _SDDADM_DOWNLOAD_SORTBY_HITS);
						echo sobiHTML::selectList( $sortMethotds, 'sortOrder', 'size="1" class="text_area"', 'value', 'text', $this->sortOrder);
					?>
			</td>
		</tr>
		<tr class="row0">
			<td width="30%">
	      		<?php echo _SDDADM_GEN_PPL_WIN_H ;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="ppLicWinH" value="<?php echo $this->ppLicWinH ?>" size="5" maxlength="10"/>
			</td>
		</tr>
		<tr class="row1">
			<td width="30%">
	      		<?php echo _SDDADM_GEN_PPL_WIN_W ;?>
			</td>
			<td width="70%">
				<input type="text" class="text_area" style="text-align:center;" name="ppLicWinW" value="<?php echo $this->ppLicWinW ?>" size="5" maxlength="10"/>
			</td>
		</tr>
	</table>
    <?php
    }
}
?>