<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class Mobile_Core_Paging {
	
	var $_start;
	var $_limit;
	var $_page;
	
	function __construct() {
	}
	
	function start() {
		return $this->_start;
	}
	
	function count() {
		return $this->_limit;
	}
	
	function current() {
		return $this->_page;
	}
	
	function next() {
		return ($this->current()+1);
	}
	
	function previous() {
		return ($this->current() < 1? 0 : ($this->current()-1));
	}
	
	function hasNext($countOnPage) {
		return ($countOnPage >= $this->count());
	}
	
	function hasPrevious() {
		return ($this->start() != 0);
	}
	
	function initStart($page) {
		
		if(empty($page)) $page = 0;
		$this->_page = $page;		
		
		if($page < 1) $this->_start = 0;
		else $this->_start = ($page * $this->_limit);
	}
	
	static function getInstance($page = 0, $limit = false) {
		$instance = new self();	
		
		if($limit === false) {
			$limit = Mobile::config('Navigation.Limit', 2);
		}
		
		$instance->_limit = $limit;
		$instance->initStart($page);
		return $instance;		
	}
	
}
?>