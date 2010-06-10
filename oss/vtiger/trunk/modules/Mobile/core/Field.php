<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once 'include/Webservices/DescribeObject.php';

class Mobile_Core_Field {
	
	function __construct($infomap) {
		foreach($infomap as $k => $v) {
			if($k == 'type') {
				$this->newtype = 'aaa';
			}
			$this->$k = $v;
		}
	}
	
	function typeName() {
		if(isset($this->type)) {
			return $this->type['name'];
		}
		return false;
	}
	
	function isReferenceType() {
		return ($this->typeName() == 'reference');
	}
	
	function format($rawvalue) {
		$datatype = $this->typeName();
		
		switch($datatype) {
			case 'password':
				return '********';
			
			case 'reference':
			case 'owner':
				$refersTo = $this->type['refersTo'];

				// No link to Currency reference information
				if(preg_match('/(.*)x(.*)/i', $rawvalue)) {
					if(!empty($refersTo)) {
						if(in_array('Currency', $this->type['refersTo'])) {
							return Mobile_Core_Record::summary($rawvalue);
						}
					} else {
						$summary = Mobile_Core_Record::summary($rawvalue);
						return "<a href='?action=Detail&id=$rawvalue' class='autolink'>$summary</a>";
					}
				}
				break;
				
			case 'email': 
				if(!empty($rawvalue)) {
					return "<a href=\"mailto:$rawvalue\" class='autolink'>$rawvalue</a>";
				}
				
			case 'phone':
			case 'mobile':
				if(!empty($rawvalue)) {
					return "<a href=\"callto:$rawvalue\" class='autolink'>$rawvalue</a>";
				}
				
			case 'url':
				if(!empty($rawvalue)) {
					$targeturl = $rawvalue;
					if(!preg_match("/:\/\//i", $rawvalue)) { // Not prefixed yet?
						$targeturl = "http://$rawvalue";
					}
					return "<a href=\"$targeturl\" class='autolink' target='_blank'>$rawvalue</a>";	
				}
		}
		return $rawvalue; // "$rawvalue <small style='color:#afafaf;'>". var_export($datatype, true) . "</small> ";
	}
	
	static function getEntityFieldnames($moduleInstance) {
		// TODO Re-write module name if its Events.
		$modulename = $moduleInstance->name;
		if($modulename == 'Events') $modulename = 'Calendar';

		$fieldnames = vtws_getEntityNameFields($modulename);
		
		$replacemap = array();
		
		/* Rewrite the entity fieldname with mapping columnname */
		/* Having fieldname and columnname is preferable */
		if($moduleInstance->name == 'HelpDesk') {
			$replacemap['title'] = 'ticket_title';
		} else if($moduleInstance->name == 'Documents') {
			$replacemap['title'] = 'notes_title';
		}
		
		if(!empty($replacemap)) {
			foreach($replacemap as $replacekey=>$replacevalue) {
				$targetkey = array_search($replacekey, $fieldnames);
				if($targetkey !== false) $fieldnames[$targetkey] = $replacevalue;
			}
		}
		return $fieldnames;
	}
}
?>