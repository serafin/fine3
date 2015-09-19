<?php

// everything is relative to the application root
chdir(dirname(__DIR__));

// internal character encoding
mb_internal_encoding('UTF-8');

// autoload
require "vendor/Fine/Autoload/Psr4.php";
\Fine\Autoload\Psr4::newInstance()
    ->addNamespace('Fine', 'vendor/Fine')
    ->addNamespace('App', 'modules')
    ->register();

// bootstrap application
\Fine\Controller\Application::newInstance()
    ->bootstrap(array(
        'Backend', 
        'CloudMsg',
        'Main',
    ));
