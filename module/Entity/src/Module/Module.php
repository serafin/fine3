<?php

namespace \Entity\Module;

class Module extends \Fine\Container\Container
{
    
    protected $_definitions = array(
        'app'    => '\Entity\Module\App',
        'entity' => ' \Entity\Module\Entity',
    );
    
}
