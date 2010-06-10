<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class Mobile_Core_Record {
	
	var $fields;
	var $id;
	
	var $moduleInstance = false;
	
	
	function __construct($infomap, $moduleInstance = false) {
		$this->fields = array();
		
		foreach($infomap as $k=>$v) {
			if($k == 'id') $this->id = $v;
			else $this->fields[$k] = $v;
		}
		$this->moduleInstance = $moduleInstance;
	}
	
	function lookupBlockFields($blocklabel) {
		$fieldblocks = $this->moduleInstance->fieldsGroup();
		if(!empty($fieldblocks)) {
			foreach($fieldblocks as $key=>$fieldnames) {
				if($key == $blocklabel) {
					return $fieldnames;
				}
			}
		}
		return false;
	}
	
	function isBlockEmpty($blocklabel, $valuelookup = true) {
		$fieldnames = $this->lookupBlockFields($blocklabel);
		if(!empty($fieldnames)) {
			if($valuelookup) {
				foreach($fieldnames as $fieldname) {
					$rawvalue = $this->fieldRawValue($fieldname); 
					if(!empty($rawvalue)) {
						return false;
					}
				}
			}
		}
		return true;		
	}
	
	function fieldRawValue($name) {
		if(isset($this->fields[$name])) return $this->fields[$name];
		return null;
	}
	
	function fieldValue($name) {
		$rawvalue = $this->fieldRawValue($name);
		if($this->moduleInstance) return $this->moduleInstance->fieldValue($name, $rawvalue);
		return $rawvalue;
	}
	
	function __toString() {
		return implode(', ', $this->fields);
	}
	
	static function summary($wsid) {
		return vtws_getName($wsid, MobileService::currentUser());
	}
	
	static function retrieve($wsid, $moduleInstance = false) {
		$infomap = vtws_retrieve($wsid, MobileService::currentUser());
		return new self($infomap, $moduleInstance);
	}
	
}
?>