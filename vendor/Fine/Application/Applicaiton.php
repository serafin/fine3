<?php

namespace \Fine\Application;

class Application extends \Fine\Container\Container
{

    public function bootstrap($modules)
    {

        // bootstrap modules
        $this->module->__invoke($modules);
        $this->module->each()->app($this);
        $this->module->each()->bootstrap();

        // bootstrap event
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




app()->repository->article->fetchAll();

app()->module->app->content();