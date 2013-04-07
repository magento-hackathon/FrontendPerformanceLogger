<?php
/**
 * Frontend Performance Logger
 *
 * @package    Zoostores_FrontendPerformanceLogger
 * @author     Michael Reeves <mreeves@zoostores.com>
 */

$installer = $this;

$installer->startSetup();

$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('frontendperformance_log')};
CREATE TABLE IF NOT EXISTS {$this->getTable('frontendperformance_log')} (
  `id` int(10) unsigned NOT NULL auto_increment,
  `time` timestamp DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(250) NOT NULL default '',
  `route` varchar(250) NOT NULL default '',
  `redirect_time` smallint NOT NULL default '0',
  `connect_time` smallint NOT NULL default '0',
  `wait_time` smallint NOT NULL default '0',
  `receive_time` smallint NOT NULL default '0',
  `load_event_time` smallint NOT NULL default '0',
  `dom_content_time` smallint NOT NULL default '0',
  `dom_complete_time` smallint NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `time` (`time`),
  KEY `route` (`route`),
  KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;  
");

$installer->endSetup();
