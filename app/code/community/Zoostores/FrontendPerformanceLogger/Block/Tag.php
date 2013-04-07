<?php
/**
 * Frontend Performance Logger
 *
 * @package    Zoostores_FrontendPerformanceLogger
 * @author     Michael Reeves <mreeves@zoostores.com>
 */

class Zoostores_FrontendPerformanceLogger_Block_Tag extends Mage_Core_Block_Template
{
    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig('zoostores/frontendperformancelogger/active');
    }

    public function isDebug()
    {
        return (bool)Mage::getStoreConfig('zoostores/frontendperformancelogger/debug');
    }


}
