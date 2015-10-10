<?php

// everything is relative to the application root
chdir(dirname(__DIR__));

// autoload
require_once __DIR__ . '/vendor/autoload.php';

// bootstrap application
\Fine\Application\Application::setInstance(new \Fine\Application\Application())->bootstrap(require 'config/module.php');
