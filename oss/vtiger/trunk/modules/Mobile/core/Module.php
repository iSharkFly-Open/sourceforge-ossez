<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once dirname(__FILE__) . '/Block.php';
include_once dirname(__FILE__) . '/Field.php';
include_once dirname(__FILE__) . '/Search.php';
include_once dirname(__FILE__) . '/Record.php';
include_once dirname(__FILE__) . '/Paging.php';

class Mobile_Core_Module {
	
	var $name;
	var $isEntity;
	var $label;
	var $singular;
	
	var $_fields = false;
	var $_fieldsgroup = false;
	var $_entityfields = false;
	
	function __construct($name, $isEntity, $label, $singular) {
		$this->name = $name;
		$this->isEntity = $isEntity;
		$this->label = $label;
		$this->singular = $singular;
	}
	
	function entityFields() {
		if($this->_entityfields === false) {
			$this->_entityfields = Mobile_Core_Field::getEntityFieldnames($this);
		}
		return $this->_entityfields;
	}
	
	function fields() {
		if(empty($this->_fields)) {
			$this->_fields = $this->doDescribe();
		}
		return $this->_fields;
	}
	
	function fieldnames() {
		$fieldinstances = $this->fields();
		$names = array();
		foreach($fieldinstances as $fieldinstance) {
			$names[] = $fieldinstance->name;
		}
		return $names;
	}
	
	function fieldLookup($name) {
		$fieldinstances = $this->fields();
		foreach($fieldinstances as $fieldinstance) {
			if($fieldinstance->name == $name) {
				return $fieldinstance;
			}
		}
		return false;
	}
	
	function fieldValue($name, $rawvalue) {
		$fieldinstance = $this->fieldLookup($name);
		return ($fieldinstance? $fieldinstance->format($rawvalue) : $rawvalue);
	}
	
	function fieldLabel($name) {
		$fieldinstance = $this->fieldLookup($name);
		return ($fieldinstance? $fieldinstance->label : $name);
	}
	
	function fieldsGroup() {
		if($this->_fieldsgroup === false) {
			$this->_fieldsgroup = Mobile_Core_Block::groupFields($this->name);
		}
		return $this->_fieldsgroup;
	}

	function doDescribe() {
		$describe = vtws_describe($this->name, MobileService::currentUser());
		$instances = array();
		if(!empty($describe['fields'])) {
			foreach($describe['fields'] as $infomap) {
				$instance = new Mobile_Core_Field($infomap);
				$instances[] = $instance;
			}
		}
		return $instances;
	}
	
	static function getInstance($modulename) {
		$cachekey = "module.instance.{$modulename}";
		
		$moduleInstance = Mobile_Core_Cache::get($cachekey);
		if($moduleInstance === false) {
			$moduleInstance = new Mobile_Core_Module($modulename, '', 
				Mobile::getTranslation($modulename, $modulename), $modulename);
				
			Mobile_Core_Cache::put($cachekey, $moduleInstance);
		}
		return $moduleInstance; 
	}
	
	static function fromWSID($wsid) {
		$cachekey = "module.fromwsid.metainfo.{$wsid}";
		
		$metainfo = Mobile_Core_Cache::get($cachekey);
		if($metainfo === false) {
			global $adb;
			$idsplit = vtws_getIdComponents($wsid);
			$metainfo = VtigerWebserviceObject::fromId($adb, $idsplit[0]);
			Mobile_Core_Cache::put($cachekey, $metainfo);
		}
		return self::getInstance($metainfo->getEntityName());
	}
	
	static function listAll($filterOnlyEntity = false) {
		
		$cachekey = "module.listinfo";
		
		$listTypesInfo = Mobile_Core_Cache::get($cachekey);
		if($listTypesInfo === false) {
			$listTypesInfo = vtws_listtypes(MobileService::currentUser());
			Mobile_Core_Cache::put($cachekey, $listTypesInfo);
		}
		
		$instances = array();
		foreach($listTypesInfo['types'] as $name) {
			$info = $listTypesInfo['information'][$name];
			$instance = new self(
				$name, $info['isEntity'], $info['label'], $info['singular']
			);
			
			$filterOutInstance = false;			
			if($filterOnlyEntity && (!$instance->isEntity || in_array($name, array('Users')))) {
				$filterOutInstance = true;
			}
			
			if(!$filterOutInstance) {
				$instances[$name] = $instance;
			}
			sort($instances);
		}
		return $instances;
	}
	
}
?>