<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

        
    protected function _initDbAdaptersToRegistry()
    {
        $this->bootstrap('multidb');
        $resource = $this->getPluginResource('multidb');
        $resource->init();

        $masterAdapter = $resource->getDb('data');

        Zend_Registry::set('masterAdapter', $masterAdapter);
        Zend_Db_Table::setDefaultAdapter($masterAdapter);
    }
    

}

