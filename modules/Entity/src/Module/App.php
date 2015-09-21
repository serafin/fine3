<?php

namespace Entity\Module;

class App
{
    
    public function db($container)
    {
        $container(array(
            
            'entity'   => '\Entity\Module\App\Db\Table\Entity', 
            
            'attr'     => '\Entity\Module\App\Db\Table\Attr',    
            'dispatch' => '\Entity\Module\App\Db\Table\Dispatch',
            'link'     => '\Entity\Module\App\Db\Table\Link',
            'order'    => '\Entity\Module\App\Db\Table\Order',    
            'route'    => '\Entity\Module\App\Db\Table\Route',    
            'rel'      => '\Entity\Module\App\Db\Table\Rel',   
            'tag'      => '\Entity\Module\App\Db\Table\Tag',    
            'tree'     => '\Entity\Module\App\Db\Table\Tree',    
            
        ));
    }
    
}
