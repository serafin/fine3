<?php

/** 
 * Global helpers
 */
 
function app()
{
    return \Fine\Application\Application::getInstance();
}

function h($s)
{
    return htmlspecialchars($s);
}


namespace App;

use \Fine\Event;

class Module extends \Fine\Application\ModuleAbstract
{
    
    public function register($app)
    {
        
        $app(array(
            
            'db' =>  function() use ($app) {
                $target = $app->target->current;
                $app->db = \Fine\Db\MySQL\Client::newInstace();
                $app->module->each()->app->db();
                return $app->db;
            },
            
            'config' => function() use ($app) {
                return $app->config = \Fine\Config\Config::newInstace()->path('module/App/config');
            },
            
            'dispatcher' => function() use ($app) {
                /** @todo */
            },
            
            'request' => function() use ($app) {
                return $app->request = \Fine\Controller\Request::newFromGlobals();
            },
            
            'response' => function() use ($app) {
                return $app->response = new \Fine\Controller\Response();
            },
            
            'router' => function() use ($app) {
            },
            
            'target' => function() use ($app) {
                $app->target = \Fine\Controller\Target::newInstace()->config('module/App/config/target');
                
                $app->target->setCurrent(
                    $app->target->is($app->request->env('ENV')) 
                        ? $app->request->env('ENV') 
                        : 'prod' 
                );
                
                return $app->target;
            },
            
        ));
        
        $app->event->on('application.bootstrap', array($this, 'bootstrap'));

    }
    
    public function bootstrap(Event $event)
    {
    }
    
}