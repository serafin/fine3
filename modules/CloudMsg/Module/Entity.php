<?php

namespace CloudMsg\Module;

class App
{
    
    public function repository($container)
    {
        $container['CloudMsg'] = '\CloudMsg\Module\Entity\Repository\CloudMsg';
    }
    
}
