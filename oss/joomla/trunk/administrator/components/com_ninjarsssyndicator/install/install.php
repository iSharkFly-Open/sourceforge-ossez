<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

function com_install()
{
	
$database	= & JFactory::getDBO();

//xipat - vh Feb 09 2009: Change sql query, remove columns: feed_catsInTitle, msg_sectcat; add column: msg_exitems
//xipat - vh Oct 28 2008
$database->setQuery("ALTER IGNORE TABLE `#__ninjarsssyndicator_feeds`  DROP COLUMN `feed_catsInTitle`;");
$database->query();
$database->setQuery("ALTER IGNORE TABLE `#__ninjarsssyndicator_feeds` CHANGE COLUMN `msg_sectcat` `msg_exitems` varchar(250) default NULL;");
$database->query();	

    
	//Do updates of table structure if we need to
	//This is mainly for people doing an upgrade
	$database->setQuery("SHOW FULL COLUMNS FROM #__ninjarsssyndicator_feeds where field = 'msg_contentPlugins'");	
	$results = $database->loadObjectList();
	
	if (!count($results))
	{
		$database->setQuery("	ALTER TABLE `#__ninjarsssyndicator_feeds`
						ADD COLUMN `msg_contentPlugins` tinyint(1) default NULL;");
		$database->query();
	}//if (!count($results))  

	$database->setQuery("SHOW FULL COLUMNS FROM #__ninjarsssyndicator_feeds where field = 'msg_includeCats'");	
	$results = $database->loadObjectList();
	
	if (!count($results))
	{
		$database->setQuery("	ALTER TABLE `#__ninjarsssyndicator_feeds`
						ADD COLUMN `msg_includeCats` tinyint(1) default NULL;");
		$database->query();
	}//if (!count($results))   

?>
<img src="<?php echo JURI::root(); ?>administrator/components/com_ninjarsssyndicator/assets/images/ninja-rss.jpg" alt="Ninja RSS Syndicator" title="Ninja RSS Syndicator" /><br />
Ninja RSS Syndicator has been succesfully installed.

<p>Ninja RSS Syndicator was originally called BCA RSS Syndicator and developed by <a href="http://www.bodyhealthdebate.co.uk/" target="_blank">Body Health Debate</a> to promote Breast Cancer Awareness in the Joomla community.</p>

<?php } 
