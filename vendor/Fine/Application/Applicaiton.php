<?php

namespace \Fine\Controller;

class Application extends \Fine\Di\Container
{

    public function bootstrap($modules)
    {

        // bootstrap modules
        $this->module
            ->setModules($modules)
            ->each()
                ->setAppication($this)
                ->bootstrap();

        // bootstrap event
        $this->event->run(\Fine\Event\Event::newInstance()->id('application.bootstrap'));

    }

    /**
     * Get module manager
     *
     * @return \Fine\Controller\ModuleManager
     */
    protected function _module()
    {
        return $this->module = new \Fine\Controller\ModuleManager();
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