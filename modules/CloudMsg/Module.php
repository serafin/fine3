<?php

namespace CloudMsg;

class Module extends Container
{
    
    public function autoload()
    {
        $this->app->autoload->addNamespace('CloudMsg', 'module/CloudMsg');
    }
    
    public function bootstrap()
    {
        
        
    }
    
    protected function _module()
    {
        return $this->module = new \CloudMsg\Module(array(
            'setApplication' => $this->getApplication(),
        ));
    }
    
}
