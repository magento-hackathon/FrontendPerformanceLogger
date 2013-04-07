<?php
/**
 * Frontend Performance Logger
 *
 * @package    Zoostores_FrontendPerformanceLogger
 * @author     Michael Reeves <mreeves@zoostores.com>
 */

class Zoostores_FrontendPerformanceLogger_Block_Tag extends Mage_Core_Block_Template
{
    private $_route;

    public function __construct() {
        parent::__construct();
    }

    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig('zoostores/frontendperformancelogger/active');
    }

    public function isDebug()
    {
        return (bool)Mage::getStoreConfig('zoostores/frontendperformancelogger/debug');
    }

    public function getRoute() 
    {
        if (!isset($this->_route)){
            $module       = Mage::app()->getRequest()->getModuleName();
            $controller   = Mage::app()->getRequest()->getControllerName();
            $action       = Mage::app()->getRequest()->getActionName();
            $this->_route = $module . '_' . $controller . '_' . $action;
        }
        return $this->_route;
    }
}
