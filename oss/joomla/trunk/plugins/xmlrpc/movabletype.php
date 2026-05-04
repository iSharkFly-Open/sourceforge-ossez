<?php
/**
 * @package MovableType API for Joomla! 1.5.x ( Extended Plugin of Joomla!1.5 XML-RPC API AND jMT_API)
 * @version 2.3.3
 * @copyright Copyright(c) 2008 Joomler!.net All Rights Reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 * Note : This file need to be saved as UTF-8 - No BOM
 * Updated 2.3.3
 * fix : pass-by-reference
 * support ftp mode upload
 *
 * Updated 2.3.2
 * fix : new post at restricted categories
 * fix : MTMail date for Japanese Famous Service (MTMail)
 * change : screen style of setting parameters
 *
 * Updated 2.3.1
 * fix : Same filename
 * add : overwrite parameter
 *
 * Updated 2.3.0
 * fix : Google Docs
 * add : filter user groups
 * add : support plugins of aftersave and beforesave
 *
 * Updated to 2.2.1
 * fix : Undefined Property
 *
 * Updated to 2.2.0
 * Add : Single Category Mode
 * fix : modified_by, modified
 * Supported ScribeFire of version 2.3.2
 *
 * Updated to 2.1.0
 * Add : Support Google Docs
 * Add : html_entity_decode method
 *
 * Updated to 2.0.1
 * change : Joomla! version check and call date for 1.5.x All
 *
 * Updated to 2.0.0
 * Support more movable Type XML-RPC API
 * fix access : cotent, category, section
 *
 * Thanks! Great Developers.
*/

/**
 * ABOUT jMT_API
 * @package jMT_API
 * @version 1.0a
 * @copyright Copyright (C) 2006 dex_stern. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

@mb_regex_encoding('UTF-8');
@mb_internal_encoding('UTF-8');

class plgXMLRPCMovableType extends JPlugin
{

	function plgXMLRPCMovableType(&$subject, $config) {
		parent::__construct($subject, $config);
		$this->loadLanguage( '', JPATH_ADMINISTRATOR );
	}

	function onGetWebServices()
	{
		return array
		(
			'blogger.getUsersBlogs'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_getUserBlogs',		'signature' => null ),
			'blogger.getUserInfo'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_getUserInfo',		'signature' => null ),
			'blogger.getRecentPosts'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_getRecentPosts',	'signature' => null ),
			'blogger.newPost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_newPost',		'signature' => null ),
			'blogger.deletePost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_deletePost',		'signature' => null ),
			'blogger.editPost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::blogger_editPost',		'signature' => null ),
			'metaWeblog.newPost'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_newPost',			'signature' => null ),
			'metaWeblog.editPost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_editPost',			'signature' => null ),
			'metaWeblog.getPost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_getPost',			'signature' => null ),
			'metaWeblog.newMediaObject'	=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_newMediaObject',		'signature' => null ),
			'metaWeblog.getRecentPosts'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_getRecentPosts',		'signature' => null ),
			'metaWeblog.getCategories'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mw_getCategories',		'signature' => null ),
			'mt.getCategoryList'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_getCategoryList',		'signature' => null ),
			'mt.getPostCategories'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_getPostCategories',		'signature' => null ),
			'mt.setPostCategories'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_setPostCategories',		'signature' => null ),
			'mt.getRecentPostTitles'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_getRecentPostTitles',	'signature' => null ),
			'mt.supportedTextFilters'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_supportedTextFilters',	'signature' => null ),
			'mt.publishPost'			=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_publishPost',			'signature' => null ),
			'mt.getTrackbackPings'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_getTrackbackPings',		'signature' => null ),
			'mt.supportedMethods'		=> array( 'function' => 'plgXMLRPCMovableTypeServices::mt_supportedMethods',		'signature' => null ),
		);
	}
}

class plgXMLRPCMovableTypeServices
{

	function blogger_getUserBlogs()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= $args[1];
		$password	= $args[2];

		$mt	= false;

		if(isset($args[3])){
			$mt = (boolean)$args[3];
		}

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(!$params->catonly && empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$db =& JFactory::getDBO();

		$structarray = array();

		if(!$mt){
			$config = & JFactory::getConfig();
			$site_name = $config->getValue('config.sitename');

			if($params->catonly){
				$query = 'SELECT c.id, c.title, s.title AS section_title, s.id AS sectionid'
				. ' FROM #__categories AS c'
				. ' LEFT JOIN #__sections AS s ON s.id = c.section'
				. ' WHERE s.published = 1 AND c.published = 1'
				. ' AND s.access <= '. $params->acl->access. ' AND c.access <= '. $params->acl->access
				. ' ORDER BY c.ordering'
				;
				$db->setQuery( $query );
				$rows = $db->loadObjectList();

				if($db->getErrorNum()){
					return new xmlrpcresp(0, $xmlrpcerruser + 1, $db->getErrorMsg());
				}

				if(count($rows) < 1){
					return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Requested was not found.'));
				}

				require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

				foreach($rows as $row){
					$structarray[] = new xmlrpcval(
						array('url' => new xmlrpcval(JURI::root(). ContentHelperRoute::getCategoryRoute($row->id, $row->sectionid), 'string'),
						'blogid' => new xmlrpcval($row->id, 'string'),
						'blogName' => new xmlrpcval( JText::sprintf('%s - %s[%s]', $site_name, $row->title, $row->section_title), 'string')),
						'struct');
				}

			} else {
				$cat_title = plgXMLRPCMovableTypeHelper::getCatTitle($params->catid);

				$structarray[] = new xmlrpcval(
					array('url' => new xmlrpcval(JURI::root(), 'string'),
					'blogid' => new xmlrpcval($params->catid, 'string'),
					'blogName' => new xmlrpcval(JText::sprintf('%s[%s]', $site_name, $cat_title), 'string')),
					'struct');
			}
			return new xmlrpcresp(new xmlrpcval($structarray, 'array'));
		}

		if($params->catonly){
			return new xmlrpcresp(new xmlrpcval(array(), 'array'));
		}

		$query = 'SELECT c.id, c.title, c.section, s.id AS sectionid, s.title AS stitle FROM #__categories AS c '.
		'INNER JOIN #__sections AS s ON s.id = c.section '.
		'WHERE c.published = 1 AND c.section > 0 '.
		'AND c.access <= '. $params->acl->access. ' AND s.access <= '. $params->acl->access.
		' AND s.published = 1 ORDER BY c.id DESC';

		$db->setQuery( $query );
		$categories = $db->loadObjectList();

		if(empty($categories)){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Requested was not found.'));
		}

		foreach($categories as $cat){
			if($params->acl->allowcatsonly && !in_array((int)$cat->id, $params->categories)){
				continue;
			}
			$structarray[] = new xmlrpcval(
				array('categoryId' => new xmlrpcval($cat->id, 'string'),
				'categoryName' => new xmlrpcval(JText::sprintf('%s [%s]', $cat->title, $cat->stitle), 'string')),
				'struct');
		}

		if(empty($structarray)){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Requested was not found.'));
		}

		return new xmlrpcresp(new xmlrpcval($structarray, 'array'));
	}

	function blogger_getUserInfo()
	{
		global $xmlrpcerruser, $xmlrpcStruct;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$user =& JUser::getInstance($username);
		$name = $user->name;
		if(function_exists('mb_convert_kana')){
			$name = mb_convert_kana($user->name, 's');
		}
		$names = explode(' ', $name);
		$firstname = $names[0];
		$lastname = trim(str_replace($firstname, '', $name));

		$struct = new xmlrpcval(
		array(
			'nickname'	=> new xmlrpcval($user->username),
			'userid'		=> new xmlrpcval($user->id),
			'url'		=> new xmlrpcval(JURI::root()),
			'email'		=> new xmlrpcval($user->email),
			'lastname'	=> new xmlrpcval($lastname),
			'firstname'	=> new xmlrpcval($firstname)
		), $xmlrpcStruct);

		return new xmlrpcresp($struct);

	}

	function blogger_newPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 6){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[1];
		$username	= strval( $args[2] );
		$password	= strval( $args[3] );
		$content	= $args[4];
		$publish	= (int)$args[5];

		return plgXMLRPCMovableTypeServices::mw_newPost($blogid, $username, $password, $content, $publish, true);
	}

	function blogger_editPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 6){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[1];
		$username	= strval( $args[2] );
		$password	= strval( $args[3] );
		$content	= $args[4];
		$publish	= (int)$args[5];

		return plgXMLRPCMovableTypeServices::mw_editPost($postid, $username, $password, $content, $publish, true);
	}

	function blogger_deletePost()
	{
		global $xmlrpcerruser, $xmlrpcBoolean;

		$args		= func_get_args();

		if(func_num_args() < 5){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[1];
		$username	= $args[2];
		$password	= $args[3];
		$publish	= (int)$args[4];

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		if(!$params->acl->delete){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('You do not have the permission of the article deletion.'));
		}

		$user = $params->user;

		$article =& JTable::getInstance('content');

		if(!$article->load( (int)$postid )) {
			return new xmlrpcresp(0, $xmlrpcerruser+1, JText::_('Sorry, no such post') );
		}

		if($params->acl->allowcatsonly && !in_array((int)$postid, $params->categories)){
			return new xmlrpcresp(0, $xmlrpcerruser+1, JText::_('Sorry, not allowed') );
		}

		if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $article->sectionid, $article->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser+1, JText::_('Sorry, not allowed') );
		}

		if((int)$article->access > $params->acl->access){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Sorry, not allowed') );
		}

		if ($article->isCheckedOut((int)$user->id))
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::sprintf('The content item [ %s ] is currently being edited by another person.', $article->title));
		}

		$article->checkout((int)$user->id);

		$article->ordering = 0;
		$article->state = -2;//to trash

		if (!$article->check()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Delete integrity check failed:') . $article->getError());
		}

		if (!$article->store()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Deleting failed:') . $article->getError());
		}

		$article->checkin();

		//clear cache
		$cache = & JFactory::getCache('com_content');
		$cache->clean();

		return new xmlrpcresp(new xmlrpcval('true', $xmlrpcBoolean));
	}

	function blogger_getRecentPosts()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 5){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[1];
		$username	= strval( $args[2] );
		$password	= strval( $args[3] );
		$numposts	= (int)$args[4];

		return plgXMLRPCMovableTypeServices::mw_getRecentPosts($blogid, $username, $password, $numposts);
	}

	function mw_newPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 4){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= $args[1];
		$password	= $args[2];
		$content	= $args[3];
		$publish	= $args[4];
		$blogger	= false;
		if(isset($args[5])){
			$blogger = $args[5];
		}

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$blogid = (int)$blogid;

		if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, null, $blogid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		$article =& JTable::getInstance('content');

		$result = plgXMLRPCMovableTypeHelper::ArticleSetData($article, $blogid, $content, $params, $publish, $blogger);
		if(!$result[0]){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, $result[1]);
		}

		jimport( 'joomla.application.component.helper' );
		$config	= JComponentHelper::getParams( 'com_content' );
		$user	= &JFactory::getUser();
		$gid	= $user->gid;

		$filterGroups	= $config->get( 'filter_groups' );

		if ( (!is_array($filterGroups) && (int) $filterGroups > 0) ) {
			$filterGroups = array($filterGroups);
		}

		if (is_array($filterGroups) && in_array( $gid, $filterGroups ))
		{
			$filterType		= $config->get( 'filter_type' );
			$filterTags		= preg_split( '#[,\s]+#', trim( $config->get( 'filter_tags' ) ) );
			$filterAttrs	= preg_split( '#[,\s]+#', trim( $config->get( 'filter_attritbutes' ) ) );
			switch ($filterType)
			{
				case 'NH':
					$filter	= new JFilterInput();
					break;
				case 'WL':
					$filter	= new JFilterInput( $filterTags, $filterAttrs, 0, 0 );
					break;
				case 'BL':
				default:
					$filter	= new JFilterInput( $filterTags, $filterAttrs, 1, 1 );
					break;
			}
			$article->introtext	= $filter->clean( $article->introtext );
			$article->fulltext	= $filter->clean( $article->fulltext );
		} elseif(empty($filterGroups)) {
			$filter = new JFilterInput(array(), array(), 1, 1);
			$article->introtext = $filter->clean( $article->introtext );
			$article->fulltext = $filter->clean( $article->fulltext );
		}

		if (!$article->check())
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Post integrity check failed:') . $article->getError());

		$article->version++;

		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('content');

		$result = $dispatcher->trigger('onBeforeContentSave', array(&$article, true));
		if(in_array(false, $result, true)) {
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
		}

		if (!$article->store()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
		}

		$dispatcher->trigger('onAfterContentSave', array(&$article, true));

		if(!$params->acl->publish && $article->state < 1){
			plgXMLRPCMovableTypeHelper::sendNewArticleMsg($article, $params->user);
		}

		//clear cache
		$cache = & JFactory::getCache('com_content');
		$cache->clean();

		return (new xmlrpcresp(new xmlrpcval($article->id, 'string')));
	}

	function mw_editPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 4){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[0];
		$username	= $args[1];
		$password	= $args[2];
		$content	= $args[3];
		$publish	= (int)$args[4];

		$blogger	= false;

		if(isset($args[5])){
			$blogger = $args[5];
		}

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$user = $params->user;

		$db = & JFactory::getDBO();


		$article =& JTable::getInstance('content');

		if(!$article->load( (int)$postid )) {
			return new xmlrpcresp(0, $xmlrpcerruser+1, JText::_('Article is not found.') );
		}

		//creater only
		if($params->acl->own && $article->created_by !== $user->id){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}
		//Allow Categories Only
		if($params->acl->allowcatsonly && !in_array($article->catid, $params->categories)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $article->sectionid, $article->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if((int)$article->access > $params->acl->access){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.') );
		}

		if ($article->isCheckedOut((int)$user->id))
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::sprintf('The content item [ %s ] is currently being edited by another person.', $article->title));
		}

		$article->checkout((int)$user->id);

		$result = plgXMLRPCMovableTypeHelper::ArticleSetData($article, null, $content, $params, $publish, $blogger);
		if(!$result[0]){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, $result[1]);
		}

		if ($publish && $params->acl->publish){
			$article->state = 1;
		}

		jimport( 'joomla.application.component.helper' );
		$config	= JComponentHelper::getParams( 'com_content' );
		$gid	= $user->gid;

		$filterGroups	= $config->get( 'filter_groups' );

		// convert to array if one group selected
		if ( (!is_array($filterGroups) && (int) $filterGroups > 0) ) {
			$filterGroups = array($filterGroups);
		}

		if (is_array($filterGroups) && in_array( $gid, $filterGroups ))
		{
			$filterType		= $config->get( 'filter_type' );
			$filterTags		= preg_split( '#[,\s]+#', trim( $config->get( 'filter_tags' ) ) );
			$filterAttrs	= preg_split( '#[,\s]+#', trim( $config->get( 'filter_attritbutes' ) ) );
			switch ($filterType)
			{
				case 'NH':
					$filter	= new JFilterInput();
					break;
				case 'WL':
					$filter	= new JFilterInput( $filterTags, $filterAttrs, 0, 0 );
					break;
				case 'BL':
				default:
					$filter	= new JFilterInput( $filterTags, $filterAttrs, 1, 1 );
					break;
			}
			$article->introtext	= $filter->clean( $article->introtext );
			$article->fulltext	= $filter->clean( $article->fulltext );
		} elseif(empty($filterGroups)) {
			$filter = new JFilterInput(array(), array(), 1, 1);
			$article->introtext = $filter->clean( $article->introtext );
			$article->fulltext = $filter->clean( $article->fulltext );
		}

		if (!$article->check())
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Post integrity check failed:') . $article->getError());

		$article->version++;

		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('content');

		$result = $dispatcher->trigger('onBeforeContentSave', array(&$article, false));
		if(in_array(false, $result, true)) {
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
			return false;
		}

		if (!$article->store()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
		}

		$article->checkin();

		$article->reorder("catid = " . (int) $article->catid);

		$dispatcher->trigger('onAfterContentSave', array(&$article, false));

		//clear cache
		$cache = & JFactory::getCache('com_content');
		$cache->clean();

		return (new xmlrpcresp(new xmlrpcval('1', 'boolean')));
	}

	function mw_getPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$ret = plgXMLRPCMovableTypeHelper::getPostStruct($postid, $params);

		if(!$ret[0]){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, $ret[1]);
		}

		return new xmlrpcresp($ret[1]);
	}

	function mw_getRecentPosts()
	{
		global $xmlrpcerruser, $xmlrpcArray;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= $args[1];
		$password	= $args[2];

		$limit		= 0;

		if(isset($args[3])){
			$limit = (int)$args[3];
		}

		$mt	= false;

		if(isset($args[5])){
			$mt = (boolean)$args[5];
		}

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$blogid = (int)$blogid;

		if($params->acl->allowcatsonly && !in_array($blogid, $params->categories)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		$db =& JFactory::getDBO();

		$where = '';
		if($params->catonly){
			$where = ' AND cc.id = '. $blogid;
		}

		$limit = $limit ? ' LIMIT '. (int)$limit: '';
		$query = 'SELECT c.id FROM #__content AS c'
		. ' INNER JOIN #__sections AS s ON s.id = c.sectionid'
		. ' INNER JOIN #__categories AS cc ON cc.id = c.catid'
		. ' WHERE c.state >= 0 AND c.access <= '. $params->acl->access
		. ' AND s.access <= '. $params->acl->access. ' AND s.published = 1'
		. ' AND cc.access <= '. $params->acl->access. ' AND cc.published = 1'. $where
		. ' ORDER BY c.created DESC'. $limit;
		$db->setQuery($query);
		$article_ids = $db->loadObjectList();

		$articles = array();
		if(count($article_ids)){
			foreach ($article_ids as $art)
			{
				$res = plgXMLRPCMovableTypeHelper::getPostStruct($art->id, $params, $mt, true);

				if ($res[0]){
					$articles[] = $res[1];
				}
			}
		}

		return new xmlrpcresp(new xmlrpcval($articles, $xmlrpcArray));
	}

	function mt_getPostCategories()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		//categoryName, categoryId, isPrimary :boolean
		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$db =& JFactory::getDBO();

		$postid = (int)$postid;

		$structarray = array();

		$query = 'SELECT cc.id, cc.title, c.created_by FROM #__categories AS cc'
		. ' INNER JOIN #__content AS c ON c.catid = cc.id'
		. ' WHERE c.id = '. $postid. ' AND cc.published = 1 AND cc.access <= '. $params->acl->access
		. ' AND c.access <= '. $params->acl->access. ' AND c.state >= 0'
		;
		$db->setQuery( $query );
		$category = $db->loadObject();

		if(empty($category)){
			return (new xmlrpcresp(new xmlrpcval(array(), 'array')));
		}

		if($params->acl->allowcatsonly && !in_array($category->id, $params->categories)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		$user = $params->user;
		if($params->acl->own && (int)$category->created_by !== (int)$user->id){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Creater Only'));
		}

		$structarray[] = new xmlrpcval(
			array('categoryName' => new xmlrpcval($category->title, 'string'),
			'categoryId' => new xmlrpcval($category->id, 'string'),
			'isPrimary' => new xmlrpcval(1, 'boolean')),
			'struct');

		return new xmlrpcresp(new xmlrpcval($structarray, 'array'));
	}

	function mt_setPostCategories()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 4){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );
		$categories	= $args[3];

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$blogid = (int)$blogid;

		if($blogid && is_array($categories) && count($categories)){
			$catid = 0;
			$primary_catid = 0;
			for($i = 0; $i < count($categories); $i++){
				if(!isset($categories[$i]['categoryId'])){
					continue;
				}
				if(isset($categories[$i]['categoryId']) && !(int)$categories[$i]['categoryId']){
					continue;
				}
				$tempcatid = (int)$categories[$i]['categoryId'];
				//Allow Categories Only
				if($params->acl->allowcatsonly && !in_array($tempcatid, $params->categories)){
					continue;
				}

				if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, null, $tempcatid)){
					continue;
				}

				if($catid == 0){
					$catid = $tempcatid;
				}

				if(isset($categories[$i]['isPrimary']) && $categories[$i]['isPrimary']){
					$primary_catid = $tempcatid;
				}
			}

			if($catid && $primary_catid && $primary_catid !== $catid){
				$catid = $primary_catid;
			}

			if(!$catid){
				if($params->acl->allowcatsonly && count($params->categories)){
					//?
					$catid = $params->categories[0];
				} else {
					return new xmlrpcresp(0, $xmlrpcerruser+1,JText::_('Please select a correct category.') );
				}
			}

			$user = $params->user;

			$article =& JTable::getInstance('content' );

			if(!$article->load( (int)$blogid )) {
				return new xmlrpcresp(0, $xmlrpcerruser+1, JText::_('Article is not found.') );
			}

			//creater only
			if($params->acl->own && $article->created_by !== $user->id){
				return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
			}

			if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $article->sectionid, $article->catid)){
				return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
			}

			if((int)$article->access > $params->acl->access){
				return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.') );
			}

			if ($article->isCheckedOut((int)$user->id))
			{
				return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::sprintf('The content item [ %s ] is currently being edited by another person.', $article->title));
			}

			$sectionid = plgXMLRPCMovableTypeHelper::getJoomlaCategorySection($catid);

			if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $sectionid, $catid)){
				return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
			}

			$article->checkout((int)$user->id);

			$article->catid = $catid;
			$article->sectionid = $sectionid;

			if (!$article->check())
				return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Post integrity check failed:') . $article->getError());

			$article->version++;

			$dispatcher =& JDispatcher::getInstance();
			JPluginHelper::importPlugin('content');

			$result = $dispatcher->trigger('onBeforeContentSave', array(&$article, false));
			if(in_array(false, $result, true)) {
				return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
				return false;
			}

			if (!$article->store()){
				return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Posting failed:') . $article->getError());
			}

			$article->checkin();

			$article->reorder("catid = " . (int) $article->catid);

			$dispatcher->trigger('onAfterContentSave', array(&$article, false));

			//clear cache
			$cache = & JFactory::getCache('com_content');
			$cache->clean();

		}

		return (new xmlrpcresp(new xmlrpcval('1', 'boolean')));
	}

	function mt_getRecentPostTitles()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 4){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		$limit = 0;

		if(isset($args[4])){
			$limit		= (int)$args[4];
		}

		return plgXMLRPCMovableTypeServices::mw_getRecentPosts($blogid, $username, $password, $limit, true);
	}

	function mt_getCategoryList()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		return plgXMLRPCMovableTypeServices::blogger_getUserBlogs($blogid, $username, $password, true);
	}

	function mt_supportedTextFilters()
	{
		return (new xmlrpcresp(new xmlrpcval(array(), 'array')));
	}

	function mt_publishPost()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 3){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$postid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );

		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		if(!$params->acl->publish){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		$article =& JTable::getInstance('content' );
		$article->load( (int)$postid );
		if($params->acl->allowcatsonly && !in_array((int)$article->catid, $params->categories)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $article->sectionid, $article->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if((int)$article->access > $params->acl->access){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		$user = $params->user;

		if ($article->isCheckedOut((int)$user->id))
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::sprintf('The content item [ %s ] is currently being edited by another person.', $article->title));
		}

		$article->checkout((int)$user->id);

		$article->state = 1;
		if (!$article->check()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Change state failed:') . $article->getError());
		}

		$article->version++;

		if (!$article->store()){
			return new xmlrpcresp(0, $xmlrpcerruser + 2, JText::_('Change state failed:') . $article->getError());
		}

		$article->checkin();

		//clear cache
		$cache = & JFactory::getCache('com_content');
		$cache->clean();

		return (new xmlrpcresp(new xmlrpcval('1', 'boolean')));
	}

	function mt_getTrackbackPings()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 1){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];

		//pingIP, pingURL, pingTitle
		return (new xmlrpcresp(new xmlrpcval(array(), 'array')));
	}

	function mt_supportedMethods()
	{
		return (new xmlrpcresp(new xmlrpcval(array(), 'array')));
	}

	function mw_newMediaObject()
	{
		global $xmlrpcerruser;

		$args		= func_get_args();

		if(func_num_args() < 4){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('The request is illegal.'));
		}

		$blogid		= (int)$args[0];
		$username	= strval( $args[1] );
		$password	= strval( $args[2] );
		$file_struct	= $args[3];

		jimport('joomla.filesystem.file');
		$params = plgXMLRPCMovableTypeHelper::UserAuthParams($username, $password);

		if (!$params)
		{
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Authentication failed.'));
		}

		if(empty($params->catid)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Please set a default category.'));
		}

		$images_path = JPATH_ROOT. DS. $params->img_storage_path;

		$file = $file_struct['bits'];
		$file_name = $file_struct['name'];

		if(empty($file)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('File is empty'));
		}
		//File size check
		if($params->maxsize && strlen($file) > $params->maxsize){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('File size is too big.'));
		}

		if(empty($file_name)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('File name is empty'));
		}

		//filename check
		$temp = pathinfo($file_name);
		$file_name = trim($temp['basename']);
		if(empty($file_name)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('File name is empty'));
		}

		$file_name = str_replace(' ', '_', $file_name);

		//ext check
		$ext = explode('.', $file_name);
		$ext = $ext[count($ext) - 1];
		if(is_array($params->ext) && !in_array($ext, $params->ext)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, $ext. JText::_(': file uploading is not allowed'));
		}

		if(file_exists($images_path . $file_name) && (!isset($file_struct['overwrite']) || !$file_struct['overwrite'] || !$params->overwrite)){
			$nameonly = str_replace(strrchr($file_name, '.'), '', $file_name);//for 1.5.10 or under
			$nameonly .= '_'. JUtility::getHash(microtime()*1000000);
			$file_name = JFile::makeSafe($nameonly. '.'. $ext);
		}

		if(!JFile::write($images_path. $file_name, $file)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::_('Can not create :'). $file_name);
		}

		if(!file_exists($images_path . $file_name)){
			return new xmlrpcresp(0, $xmlrpcerruser + 1, JText::sprintf('Can not create : %s', $images_path. $file_name));
		}

		$responce_struct = array('url' => new xmlrpcval(JURI::root(true). '/' . $params->img_storage_path. $file_name, 'string'));

		return (new xmlrpcresp(new xmlrpcval($responce_struct, 'struct')));
	}

}

class plgXMLRPCMovableTypeHelper
{

	function sendNewArticleMsg($article, $user)
	{
		require_once (JPATH_ADMINISTRATOR.DS.'components'.DS.'com_messages'.DS.'tables'.DS.'message.php');

		$info = JText::_('as a uncategorized content');

		$db = & JFactory::getDBO();

		$section = JText::_('No section selection');
		if($article->sectionid){
			$query = 'SELECT s.title' .
					' FROM #__sections AS s' .
					' WHERE s.scope = "content"' .
					' AND s.id = ' . (int) $article->sectionid;
			$db->setQuery($query);
			$section = $db->loadResult();
		}

		$category = JText::_('Uncategorieze');
		if($article->catid){
			$query = 'SELECT c.title' .
					' FROM #__categories AS c' .
					' WHERE c.id = ' . (int) $article->catid;
			$db->setQuery($query);
			$category = $db->loadResult();
		}

		if($article->catid || $article->sectionid){
			$info = JText::sprintf('from Section [ %s ]  and Category  [ %s ]', $section, $category);
		}

		// load language for messaging
		$lang =& JFactory::getLanguage();
		$lang->load('com_messages');

		$query = 'SELECT id' .
				' FROM #__users' .
				' WHERE sendEmail = 1';
		$db->setQuery($query);
		$users = $db->loadResultArray();
		foreach ($users as $user_id)
		{
			$msg = new TableMessage($db);
			$msg->send($user->id, $user_id, JText::_('New Item'), JText::sprintf('ON_NEW_CONTENT', $user->username, $article->title, ' '. $info));
		}
	}

	function Filter($article)
	{
		$filter = & JInputFilter::getInstance();
		return $filter->clean($article);
	}

	function authenticateUser($username, $password)
	{
		jimport( 'joomla.user.authentication');
		$auth = & JAuthentication::getInstance();
		$credentials['username'] = $username;
		$credentials['password'] = $password;
		return $auth->authenticate($credentials, null);
	}

	function UserAuthParams($username, $password)
	{

		$authuser = plgXMLRPCMovableTypeHelper::authenticateUser($username, $password);
		//Check Registered
		if($authuser->status == JAUTHENTICATE_STATUS_FAILURE || empty($authuser->username) || empty($authuser->password) || empty($authuser->email)){
			return false;
		}

		$user =& JUser::getInstance($authuser->username);
		//Check Status
		if(empty($user->id) || $user->block || !empty($user->activation)){
			return false;
		}

		$params = plgXMLRPCMovableTypeHelper::getPluginSettings();

		//IP Restrict
		if (!empty($params->ipaddress) && !in_array(@$_SERVER['REMOTE_ADDR'], $params->ipaddress)){
			return false;
		}

		$params->acl = new stdClass();

		plgXMLRPCMovableTypeHelper::bindAccess($params, $user);
		if(!$params->acl){
			return false;
		}

		$params->user = $user;

		jimport('joomla.application.component.helper');
		$paramlang = & JComponentHelper::getParams('com_languages');
		$language = $user->getParam('language', $paramlang->get('site'));
		$lang = & JFactory::getLanguage();
		$lang->setLanguage($language);
		$lang->load('plg_xmlrpc_movabletype', JPATH_ADMINISTRATOR);

		if(empty($params->regex) && $params->autokey && $params->maxkeyword){
			$params->regex = JText::_('METAKEYWORDREGEX');
		}

		$conf = JFactory::getConfig();
		$params->offset = $user->getParam('timezone', $conf->getValue('config.offset'));

		return $params;

	}

	function bindAccess(& $params, $user)
	{
		$params->acl->delete = false;
		$gid = intval( $user->gid );
		$params->acl->access = 1;

		if(($gid === 18 || $gid === 19) && isset($params->users[$user->id])){
			$params->acl->own = $params->creatoronly;
			$params->acl->allowcatsonly = true;
			$params->acl->publish = $params->publish;

			$params->categories = $params->users[$user->id];

			return true;
		}

		$params->acl->own = $user->authorize('com_content', 'edit', 'content', 'own');
		$params->acl->allowcatsonly = false;
		$params->acl->publish = $user->authorize('com_content', 'publish', 'content', 'all');

		if($gid === 19){//Author User
			return true;
		} else if($gid === 20){//Editor User
			return true;
		} else if($gid === 21){//Publisher User
			return true;
		} else if($gid > 22){//Manager, Administrator, Super Administrator
			$params->acl->access = 2;
			$params->acl->delete = true;
			return true;
		}

		return false;
	}

	function parseAccess(& $params, $bParams)
	{
		/**
		 * userid=1,2,3
		 */
		$access = $bParams->get('access');
		if(empty($access)){
			return true;
		}

		$params->users = array();

		$access = explode("\n", $access);
		foreach($access as $v)
		{
			$temp = explode('=', $v);
			if(count($temp) != 2 || !is_numeric($temp[0]) || (int)$temp[0] < 1 || empty($temp[1])){
				continue;
			}

			$categories = plgXMLRPCMovableTypeHelper::CheckStrToArrayInt(trim($temp[1]));
			if(count($categories) < 1){
				continue;
			}

			$params->users[(int)$temp[0]] = $categories;
		}

		return true;
	}

	function getPluginSettings()
	{
		$plugin =& JPluginHelper::getPlugin('xmlrpc','movabletype');

	 	$params = new JParameter( $plugin->params );

	 	$temp = new stdClass();

		$temp->db_enc			= $params->get('db_enc', 'UTF-8');
		$temp->enc				= $GLOBALS['mainframe']->getEncoding();

		$temp->catid				= intval($params->get('catid'));

		$temp->catonly			= intval($params->get('catonly'));

		$temp->img_storage_path		= $params->get('img_storage_path', 'images/stories/');
		$temp->overwrite			= intval( $params->get('overwrite') );

		//option
		$temp->autodesc			= intval($params->get('autodesc', 1));
		if($temp->autodesc){
			$temp->maxkeylength	= intval($params->get('maxkeylength', 30));
		}
		$temp->autokey			= intval($params->get('autokey', 1));
		if($temp->autokey){
			$temp->maxkeyword		= intval($params->get('maxkeyword', 10));
		}

		//Google Doc
		$temp->pagebreak			= intval($params->get('pagebreak', 1));
		$temp->readmore			= intval($params->get('readmore', 0));

		$temp->creatoronly		= intval( $params->get('creatoronly', 1) );

		$temp->use_iprestrict		= intval( $params->get('use_iprestrict', 0) );
//		$temp->offset			= $params->get('offset');
		$temp->ext			= trim( $params->get('exts') );
		$temp->regex			= trim( $params->get('regex') );
		if(!empty($temp->ext)){
			$temp->ext		= Jlr_String::StrToTrimArray( trim($temp->ext) );// changed to ',' from '|'
		}
		$temp->maxsize		= intval( $params->get('maxsize', 0) );

		$temp->ipaddress = null;
		if ($temp->use_iprestrict)
		{
			$allowed_ip = plgXMLRPCMovableTypeHelper::IPStrToArrayStr($params->get('ipaddress'));
			if (!empty($allowed_ip))
			{
				$temp->ipaddress = $allowed_ip;
			}
		}

		$temp->publish = intval( $params->get('publish') );

		plgXMLRPCMovableTypeHelper::parseAccess($temp, $params);

		return $temp;
	}

	function IPStrToArrayStr($IP)
	{
		if(empty($IP)){
			return false;
		}
		$temp = explode(',', trim($IP));
		$result = array();
		if(!empty($temp) && count($temp)){
			$regex = '/([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})/';
			foreach($temp as $tp){
				if(preg_match($regex, trim($tp))){
					$result[] = trim($tp);
				}
			}
		}
		return $result;
	}

	function CheckStrToArrayInt($str, $sep=','){
		if(empty($str)){
			return null;
		}
		$array = explode($sep, $str);
		$result = array();
		if(is_array($array)){

			foreach ( $array as $ar){
				$int = (int) trim($ar);
				if( !empty( $int ) ){
					$result[] = $int;
				}
			}
		}

		return $result;
	}

	function getSectionTitle($sectionid)
	{
		$sectionid = (int)$sectionid;
		if(!$sectionid){
			return '';
		}

		$db = & JFactory::getDBO();
		$query = 'SELECT title FROM #__sections WHERE id = '. $sectionid;
		$db->setQuery( $query );
		return $db->loadResult();
	}

	function getCatTitle($id)
	{
		$db =& JFactory::getDBO();
		if(!$id){
			return;
		}
		$query = 'SELECT title'
		. ' FROM #__categories'
		. ' WHERE id = '. (int)$id
		;
		$db->setQuery( $query );
		return $db->loadResult();
	}

	function getJoomlaCategorySection($catid)
	{
		$db =& JFactory::getDBO();
		$query = 'SELECT section FROM #__categories WHERE id = '. (int)$catid;
		$db->setQuery($query);
		$db->query();
		$res = $db->loadResult();
		return (is_numeric($res)? (int)$res: 0);
	}

	function GoogleDocsToContent(&$content, $params)
	{

		if(is_array($content) || (is_string($content) && strpos($content, 'google_header') === false)){
			return;
		}

		//Header title
		$headerregex = '/<div.+?google_header[^>]+>(.+?)<\/div>/is';
		//Old page break;
		$oldpbregex = '/<p.+?page-break-after[^>]+>.*?<\/p>/is';
		//Horizontal line
		$hrizonregex = '/<hr\s+?size="2"[^>]*?>/is';
		//New page break;
		$newpbregex = '/<hr\s+?class="pb"[^>]*?>/is';

		$match = array();
		if(preg_match($headerregex, $content, $match)){
			$title = trim($match[1]);
			$introandfull = preg_replace($headerregex, '', $content);
		} else {
				$title = JString::substr( $content, 0, 30 );
				$introandfull = str_replace($title, '', $content);
		}

		$text = preg_split($oldpbregex, $introandfull, 2, PREG_SPLIT_NO_EMPTY);
		$introtext = '';
		$fulltext = '';
		if(count($text) > 1){
			$introtext = trim($text[0]);
			$fulltext = trim($text[1]);
		} else {

			//new
			if(!$params->readmore){
				//Horizontal line
				$regex = $hrizonregex;
			} else {
				//Page break
				$regex = $newpbregex;
			}

			//first horizontal line or pagebreak
			$text = preg_split($regex, $introandfull, 2, PREG_SPLIT_NO_EMPTY);
			if(count($text) > 1){
				$introtext = trim($text[0]);
				$fulltext = trim($text[1]);
			} else {
				$introtext = trim($introandfull);
			}
		}

		if($params->pagebreak){
			$count = 2;
			//for pagebreak
			$text = preg_split($newpbregex, $introtext, -1, PREG_SPLIT_NO_EMPTY);
			if(count($text) > 1){
				$introtext = '';
				for($i = 0; $total = count($text), $i < $total;$i++){
					$alt = JText::sprintf('PAGEBREAK', $count);
					$count++;
					$introtext .= $text[$i];
					if($i < ($total -1)){
						$introtext .= '<hr title="'. $alt. '" alt="'. $alt. '" class="system-pagebreak" />';
					}
				}
			}

			if(!empty($fulltext)){
				$text = preg_split($newpbregex, $fulltext, -1, PREG_SPLIT_NO_EMPTY);
				if(count($text) > 1){
					$fulltext = '';
					for($i = 0; $total = count($text), $i < $total;$i++){
						$alt = JText::sprintf('PAGEBREAK', $count);
						$count++;
						$fulltext .= $text[$i];
						if($i < ($total -1)){
							$fulltext .= '<hr title="'. $alt. '" alt="'. $alt. '" class="system-pagebreak" />';
						}
					}
				}
			}
		}

		//b to br and escape
		$replace_from = array('<b>', '</b>', '<br>');
		$replace_to = array('<strong>', '</strong>', '<br />');
		$title = htmlspecialchars(strip_tags($title), ENT_QUOTES, 'UTF-8');
		$introtext = str_replace($replace_from, $replace_to, $introtext);
		$fulltext = str_replace($replace_from, $replace_to, $fulltext);

		$content = array();
		$content['title']			= $title;
		$content['description']		= $introtext;
		$content['mt_text_more']	= $fulltext;
		return;
	}

	function getPostStruct($id, $params, $mt=false, $check=false)
	{
		$item =& JTable::getInstance('content' );
		$item->load( (int)$id );

		if (!$item->id){
			return array(false, JText::_('Article is not found'));
		}

		$user = $params->user;
		if($params->acl->own && (int)$item->created_by !== (int)$user->id){
			return array(false, JText::_('Creater Only'));
		}

		if($params->acl->allowcatsonly && !in_array((int)$item->catid, $params->categories)){
			return array(false, JText::_('Not Allowed Category'));
		}

		if(!$check){
			if(!plgXMLRPCMovableTypeHelper::SectionCategoryAccess($params->acl->access, $item->sectionid, $item->catid)){
				return array(false, JText::_('Not Allowed'));
			}
		}

		$date = iso8601_encode(strtotime($item->created)+(int)($params->offset*60*60), 0);

		if($mt){
			$xmlArray = array(
				'userid'			=> new xmlrpcval( $item->created_by, 'string' ),
				'dateCreated'		=> new xmlrpcval( $date , 'dateTime.iso8601' ),
				'postid'			=> new xmlrpcval( $item->id, 'string' ),
				'title'			=> new xmlrpcval( Jlr_String::transcode($item->title, $params->db_enc, $params->enc), 'string' ),
			);
		} else {
			$category_title = plgXMLRPCMovableTypeHelper::getCatTitle($item->catid);
			$section_title = plgXMLRPCMovableTypeHelper::getSectionTitle($item->sectionid);

			require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');
			$link	= JURI::root(). (ContentHelperRoute::getArticleRoute($item->id, $item->catid, $item->sectionid));
			$xmlArray = array(
				'userid'			=> new xmlrpcval( $item->created_by, 'string' ),
				'dateCreated'		=> new xmlrpcval( $date , 'dateTime.iso8601' ),
				'postid'			=> new xmlrpcval( $item->id, 'string' ),
				'description'		=> new xmlrpcval( Jlr_String::transcode($item->introtext, $params->db_enc, $params->enc), 'string' ),
				'title'			=> new xmlrpcval( Jlr_String::transcode($item->title, $params->db_enc, $params->enc), 'string' ),
				'categories'		=> new xmlrpcval( array( new xmlrpcval(JText::sprintf('%s [%s]', $category_title, $section_title), 'string') ) , 'array' ),
				'link'			=> new xmlrpcval( $link, 'string' ),
				'permaLink'		=> new xmlrpcval( $link, 'string' ),
				'mt_excerpt'		=> new xmlrpcval( Jlr_String::transcode($item->metadesc, $params->db_enc, $params->enc), 'string' ),
				'mt_text_more'	=> new xmlrpcval( Jlr_String::transcode($item->fulltext, $params->db_enc, $params->enc), 'string' ),
				'mt_allow_comments'	=> new xmlrpcval( '1', 'int'),
				'mt_allow_pings'	=> new xmlrpcval( '0', 'int' ),
				'mt_convert_breaks'	=> new xmlrpcval( '', 'string' ),
				'mt_keywords'		=> new xmlrpcval( Jlr_String::transcode($item->metakey, $params->db_enc, $params->enc), 'string' )
			);
		}

		$xmlObject = new xmlrpcval($xmlArray, 'struct');
		return array(true, $xmlObject);
	}

	function ArticleSetData(&$article, $blogid, $content, $params, $publish, $blogger=false)
	{
		$date = plgXMLRPCMovableTypeHelper::ObjectDateDetect();
		$created = $date->toMySQL();

		if(!$article->id){
			$article->catid = (int)$blogid;
			$article->sectionid = plgXMLRPCMovableTypeHelper::getJoomlaCategorySection($article->catid);
			$article->created_by = $params->user->id;
		} else {
			$article->modified_by = $params->user->id;
			$article->modified = $created;
		}

		if (!$article->sectionid){
			return array(false, JText::_('Section is not found.'));
		}

		if($blogger){
			plgXMLRPCMovableTypeHelper::GoogleDocsToContent($content, $params);
		}

		$article->title = $content['title'];

		if(!isset($content['description'])){
			$content['description'] = '';
		}

		$article->introtext = $content['description'];
		$article->introtext = str_replace('<br>', '<br />', $article->introtext);

		if(!isset($content['mt_text_more'])){
			$content['mt_text_more'] = '';
		}

		$article->fulltext = $content['mt_text_more'];

		$db = & JFactory::getDBO();
		$nullDate = $db->getNullDate();

		jimport('joomla.utilities.date');

		if(!isset($content['dateCreated'])){
			$content['dateCreated'] = '';
		}

		if(empty($content['dateCreated'])){
			if(empty($article->created) || $article->created == $nullDate){
				$article->created = $created;
			}
			if(empty($article->publish_up) || $article->publish_up == $nullDate){
				$article->publish_up = $created;
			}
		} else {
			if(preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\+\d{2}:\d{2}$/', $content['dateCreated'])){
				$date = plgXMLRPCMovableTypeHelper::ObjectDateDetect($content['dateCreated'], $params->offset);
			} else {
				$date = plgXMLRPCMovableTypeHelper::ObjectDateDetect(iso8601_decode($content['dateCreated']));
			}
			$created = $date->toMySQL();
			$article->created = $created;
			$article->publish_up = $created;
		}

		if(empty($article->publish_down)){
			$article->publish_down = $nullDate;
		}

		if(!isset($content['mt_keywords'])){
			$content['mt_keywords'] = '';
		}

		$article->metakey = $content['mt_keywords'];

		if(!isset($content['mt_excerpt'])){
			$content['mt_excerpt'] = '';
		}

		$article->metadesc = $content['mt_excerpt'];

		$article = plgXMLRPCMovableTypeHelper::Filter($article);

		if(!empty($article->fulltext)){
			$article->fulltext = str_replace('<br>', '<br />', $article->fulltext);
			$textlength = JString::strlen(strip_tags($article->fulltext));
			if(!$textlength){
				$article->fulltext = null;
			}
		}

		//Auto Create MetaKeyword
		if(empty($article->metakey) && $params->autokey){
			$article->metakey = Jlr_String::makeMetaKey($article, $params->maxkeyword, $params->regex);
		}

		//Auto Create MetaDesc
		if(empty($article->metadesc) && $params->autodesc){
			$article->metadesc = Jlr_String::makeMetaDesc($article, $params->maxkeylength);
		}

		//encode
		$article->title		= Jlr_String::transcode($article->title, $params->enc, $params->db_enc);
		$article->introtext	= Jlr_String::transcode($article->introtext, $params->enc, $params->db_enc);
		$article->fulltext	= Jlr_String::transcode($article->fulltext, $params->enc, $params->db_enc);
		$article->metakey	= Jlr_String::transcode($article->metakey, $params->enc, $params->db_enc);
		$article->metadesc	= Jlr_String::transcode($article->metadesc, $params->enc, $params->db_enc);

		if(!isset($article->state)){
			$article->state = 0;
		}

		if ($publish && $params->acl->publish){
			$article->state = 1;
		}

		return array(true, '');
	}

	function SectionCategoryAccess($access, $sectionid, $catid)
	{
		$db =& JFactory::getDBO();
		$sectionid = (int)$sectionid;
		$catid = (int)$catid;
		if(!$catid){
			return false;
		}
		$access = (int)$access;
		if(!$sectionid){
			$sectionid = plgXMLRPCMovableTypeHelper::getJoomlaCategorySection($catid);
		}
		$query = 'SELECT access FROM #__sections WHERE id = '. $sectionid;
		$db->setQuery( $query );
		if((int)$db->loadResult() > $access){
			return false;
		}
		$query = 'SELECT access FROM #__categories WHERE id = '. $catid;
		$db->setQuery( $query );
		if((int)$db->loadResult() > $access){
			return false;
		}
		return true;
	}

	function ObjectDateDetect($time=null, $offset=null)
	{
		if((int)str_replace('1.5.', '', JVERSION) > 1){
			if(empty($time) && empty($offset)){
				return JFactory::getDate();
			} else {
				return JFactory::getDate($time, $offset);
			}
		} else {
			if(empty($time) && empty($offset)){
				return new JDate();
			} else {
				return new JDate($time, $offset);
			}
		}
	}
}

class Jlr_String
{
	function transcode($souce, $from, $to)
	{

			return $souce;
		//When this plugin cannot convert letter encoding well, please do to comment this line.
		//And You validate the comment out part of the movabletype.xml file, and please set it.

		if(strtoupper($from) == strtoupper($to)){
			return $souce;
		}
		if(function_exists('iconv')){
			return JString::transcode($souce, $from, $to). $souce.$from.$to;
		}
		if(strtoupper($to) == 'ISO-8859-1' && strtoupper($from) == 'UTF-8'){
			return utf8_encode($souce);
		}
		if(strtoupper($to) == 'ISO-8859-1' && strtoupper($from) == 'UTF-8'){
			return utf8_decode($souce);
		}
		if(function_exists('mb_convert_encoding')){
			return mb_convert_encoding($souce, $to, $from);
		}
		return $souce;
	}

	function StrToTrimArray($str, $sep=','){
		if(empty($str)){
			return null;
		}
		$array = explode($sep, $str);
		$result = array();
		if(is_array($array) && count($array)){
			foreach($array as $ar){
				$temp = trim($ar);
				if(!empty($temp)){
					$result[] = $temp;
				}
			}
		}
		return $result;
	}

	function makeMetaKey($row, $max_word, $regex)
	{
		if(empty($max_word) || empty($regex)){
			return null;
		}
		$cat_title = plgXMLRPCMovableTypeHelper::getCatTitle($row->catid);
		$title = $row->title;
		$str = strip_tags($title. ' '. $cat_title. ' '. $row->introtext. ' '. $row->fulltext);

		if(empty($str)){
			return null;
		}

		$str = preg_replace( '/{.*?}/i', '', $str);//for mambot
		$token = array();
		$match = array();
		while(true){
			$bytes = Jlr_String::ereg($regex, $str, $match);
			if ($bytes == false) {
				break;
			} else {
				$match = strtolower($match[0]);
				if(!in_array($match, $token) && JString::strlen($match) > 2){
					array_push($token, $match);
				}
				if(count($token) > ($max_word - 1)){
					break;
				}
			}
			$pos = strpos($str, $match);
			$str = substr($str, $pos+$bytes);
		}
		if(!empty($token)){
			return implode(', ', $token );
		} else {
			return null;
		}
	}

	function makeMetaDesc($article, $max)
	{
		if(empty($max)){
			return;
		}
		$str = trim(strip_tags($article->introtext. ' '. $article->fulltext));
		$str = preg_replace( '/{.*?}/i', '', $str);//for mambot
		$str = str_replace(array("\r\n", "\n", "\r"), '', $str);
		$length = JString::strlen( $str );
		if($length > $max){
			$str = JString::substr($str, 0, $max);
		}

		return $str;
	}

	function ereg($regex, $s, &$matchs)
	{
		if(function_exists('mb_ereg')){
			return mb_ereg($regex, $s, $matchs);
		}
		return ereg($regex, $s, $matchs);
	}
}

class JInputFilter extends JFilterInput
{
	function & getInstance($tagsArray = array(), $attrArray = array(), $tagsMethod = 0, $attrMethod = 0, $xssAuto = 1)
	{
		static $instances;

		$sig = md5(serialize(array($tagsArray,$attrArray,$tagsMethod,$attrMethod,$xssAuto)));

		if (!isset ($instances)) {
			$instances = array();
		}

		if (empty ($instances[$sig])) {
			$instances[$sig] = new JInputFilter($tagsArray, $attrArray, $tagsMethod, $attrMethod, $xssAuto);
		}

		return $instances[$sig];
	}

	function clean($source)
	{
		//object only
		foreach (get_object_vars($source) as $k => $v)
		{
			if(!is_string($v)){
				continue;
			}
			switch($k){
				case 'introtext':
				case 'fulltext':
					$source->$k = $this->decode($v);
					break;
				default:
					$source->$k = $this->_remove($this->decode($v));
			}
		}
		return $source;
	}

	function decode($source)
	{
		$version = (int)PHP_VERSION;
		// url decode
		$before = '';
		while(!(strcmp($before, $source) === 0)){
			$before = $source;
			if($version < 5){
				$source = JInputFilter::utf8_html_entity_decode($source);
				$source = html_entity_decode($source, ENT_QUOTES);
			} else {
				$source = html_entity_decode($source, ENT_QUOTES, 'UTF-8');
			}
		}

		// convert decimal
		$source = preg_replace('/&#(\d+);/me', "chr(\\1)", $source); // decimal notation
		// convert hex
		$source = preg_replace('/&#x([a-f0-9]+);/mei', "chr(0x\\1)", $source); // hex notation
		return $source;
	}

	/**
	 * reference with a PHP manual
	 * elektronaut gmx.net
	 */
	function utf8_replaceEntity($result){
		$value = (int)$result[1];
		$string = '';

		$len = round(pow($value,1/8));

		for($i=$len;$i>0;$i--){
			$part = ($value & (255>>2)) | pow(2,7);
			if ( $i == 1 ) $part |= 255<<(8-$len);

			$string = chr($part) . $string;

			$value >>= 6;
		}

		return $string;
	}

	/**
	 * reference with a PHP manual
	 * elektronaut gmx.net
	 */
	function utf8_html_entity_decode($string){
		return preg_replace_callback( '/&#([0-9]+);/u', array('JInputFilter', 'utf8_replaceEntity'), $string );
	}

}
