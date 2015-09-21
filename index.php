<?php

class A 
{
    
    public function each()
    {
        echo '__invoke!';
    }
        
}

$a = new A();
$a->each();




