
-- 
-- Table structure for table `#__apolls`
-- 

CREATE TABLE IF NOT EXISTS `#__apoll_polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- 
-- Table structure for table '#__apoll_options'
-- 


CREATE TABLE IF NOT EXISTS `#__apoll_options` (
  `id` int(11) NOT NULL auto_increment,
  `apoll_id` int(11) NOT NULL default '0',
  `text` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `color` varchar(6)  NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `apoll_id` (`apoll_id`,`text`(1))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- 
-- Table structure for table '#__apoll_votes'
-- 

CREATE TABLE IF NOT EXISTS `#__apoll_votes` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `option_id` int(11) NOT NULL default '0',
  `apoll_id` int(11) NOT NULL default '0',
  `ip` int(10) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY  (`id`),
  KEY `apoll_id` (`apoll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- 
-- Table structure for table '#__apoll_config'
--

CREATE TABLE IF NOT EXISTS `#__apoll_config` (
  `drop_it` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `#__apoll_config` (`drop_it`) VALUES ('0');