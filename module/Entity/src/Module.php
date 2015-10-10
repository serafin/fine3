<?php

namespace Entity;

use \Fine\Di;

class Module extends \Fine\Container\Container
{
    
    protected $_definitions = array(
        'module' => '\Entity\Module\Module',    
    );

    public function register($app)
    {
        $app['repository'] = function() use ($app) {
            return $app->repository = $app->module->entity->repository;
        };
    }
    
    protected function _repository()
    {
        $this->repository = new \Fine\Container\Container();
        $this->app->module->each()->entity->repository($this->repository);        
        return $this->repository;
    }
    
    protected function _subentity()
    {
        $this->subentity = new \Fine\Container\Container();
        $this->app->module->each()->entity->subentity($this->subentity);        
        return $this->subentity;
    }

}
