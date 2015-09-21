<?php

namespace \Fine\Application;

class ModuleManager extends \Fine\Container\Container
{
    
    protected $_each;
    
    public function each()
    {
        if (!$this->_each) {
            $this->_each = \Fine\Application\ModuleEach($this);
        }
        return $this->_each;
    }
    
}
