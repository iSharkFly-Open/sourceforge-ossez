<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once 'include/Webservices/Query.php';
include_once 'include/Webservices/Retrieve.php';

class Mobile_Core_Search {
	
	static function sessionkey($moduleInstance) {
		return "search.{$moduleInstance->name}";
	}
	
	static function retrieve($wsid, $moduleInstance = false) {
		return Mobile_Core_Record::retrieve($wsid, $moduleInstance);		
	}
	
	static function query($moduleInstance, $input, $fieldnames = false, $paging = false) {
		
		$entityfields = $moduleInstance->entityFields();
		if(empty($fieldnames)) {
			$fieldnames = $moduleInstance->fieldnames();
		}
		
		$queryString = "SELECT " . implode(',', $entityfields) . " FROM {$moduleInstance->name} ";
		$whereCondition = '';
		 
		foreach($fieldnames as $fieldname) {
			if($fieldname == 'id') continue;
			
			// TODO Skip filename search in documents module.
			if($moduleInstance->name == 'Documents' && $fieldname == 'filename') continue;
			
			$fieldInstance = $moduleInstance->fieldLookup($fieldname);
			if($fieldInstance->isReferenceType()) continue;
			
			
			if($whereCondition != '') $whereCondition .= ' OR ';
			$whereCondition .= " $fieldname LIKE '%{$input}%' ";
		}
		
		$fullQueryString = "$queryString WHERE $whereCondition";
		
		return self::_query($fullQueryString, $paging);
	}
	
	static function entity($moduleInstance, $paging = false) {
		$fieldnames = $moduleInstance->entityFields();		
		$queryString = "SELECT " . implode(',', $fieldnames) . " FROM {$moduleInstance->name}";
		return self::_query($queryString, $paging);
	}
	
	private static function _query($queryString, $paging = false) {
		if($paging !== false) {
			$limitClause = " LIMIT {$paging->start()}, {$paging->count()}";
		}
		
		$queryString .= " $limitClause ;";
		
		$qresultRows = vtws_query($queryString, MobileService::currentUser());
		
		$resultRows = array();
		foreach($qresultRows as $row) {
			$resultRows[] = new Mobile_Core_Record($row, $fieldnames);
		}
		return $resultRows;
	}
}
?>