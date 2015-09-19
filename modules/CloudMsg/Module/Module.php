<?php

namespace CloudMsg\Module;

class Module extends \Fine\Container\Container
{
    
    public function _app()
    {
        return $htis->app = new \CloudMsg\Module\App();
    }
    
    public function _entity()
    {
        return $htis->entity = new \CloudMsg\Module\Entity();
    }
    
}
