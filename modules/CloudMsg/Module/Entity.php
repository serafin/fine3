<?php

namespace CloudMsg\Module;

class App
{
    
    public function repository()
    {
        $repository = app()->repository;
        $repository('CloudMsg',  '\CloudMsg\Entity\Repository\CloudMsg');
    }
    
}
