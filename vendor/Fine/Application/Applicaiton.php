<?php

namespace \Fine\Application;

class Application extends \Fine\Container\Container
{

    /**
     * Bootstrap application
     */ 
    public function bootstrap($modules)
    {

        // set modules definitions and register them
        $this->module->__invoke($modules)->each()->register($this);

        // run application.bootstrap event
        $this->event->run(\Fine\Event\Event::newInstance()->id('application.bootstrap'));
        
    }

    /**
     * Get module manager
     *
     * @return \Fine\Application\ModuleManager
     */
    protected function _module()
    {
        return $this->module = new \Fine\Application\ModuleManager();
    }

    /**
     * Get event manager
     *
     * @return \Fine\Event\EventManager
     */
    protected function _event()
    {
        return $this->event = new \Fine\Event\EventManager();
    }

}
