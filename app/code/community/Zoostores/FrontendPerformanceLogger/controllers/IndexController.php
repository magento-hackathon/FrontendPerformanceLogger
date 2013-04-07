<?php
class Zoostores_FrontendPerformanceLogger_IndexController extends Mage_Core_Controller_Front_Action {    
    public function indexAction() {
        echo get_class($log);
        echo 'Index Action!';
    }
    public function saveAction() {
        $log = Mage::getModel('frontendperformancelogger/log');
        $p = Mage::app()->getRequest()->getParams();
        // echo var_export($p,true); //debug
        $log->setUrl($p['url']); 
        $log->setRoute($p['route']); 
        $log->setRedirectTime($p['redirectTime']); 
        $log->setConnectTime($p['connectTime']); 
        $log->setWaitTime($p['waitTime']); 
        $log->setReceiveTime($p['receiveTime']); 
        $log->setLoadEventTime($p['loadEventTime']); 
        $log->setDomContentTime($p['domContentTime']); 
        $log->setDomCompleteTime($p['domCompleteTime']); 
        $log->save();
    }
}
