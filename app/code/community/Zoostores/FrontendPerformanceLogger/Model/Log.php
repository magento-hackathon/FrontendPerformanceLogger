<?php
/**
 * Frontend Performance Logger
 *
 * @package    Zoostores_FrontendPerformanceLogger
 * @author     Michael Reeves <mreeves@zoostores.com>
 */

class Zoostores_FrontendPerformanceLogger_Model_Log extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('frontendperformancelogger/log');
    }
}
