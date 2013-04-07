<?php
class Zoostores_FrontendPerformanceLogger_Model_Mysql4_Log extends Mage_Core_Model_Mysql4_Abstract
{
    public function __construct()
    {
        $this->_init('frontendperformancelogger/log', 'id');
    }
}
