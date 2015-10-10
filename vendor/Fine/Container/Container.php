<?php

namespace \Fine\Container;

class Container implements \ArrayAccess
{

    /**
     * Registred service definitions
     *
     * @var array
     */
    protected $_definitions = array();

    /**
     * Register services
     *
     * @param array $definitions Definitions, key is service name, value dead object
     */
    public function __invoke(array $definitions)
    {
        foreach ($definitions as $key => $value) {
            $this->_definitions[$key] = $value;
        }
    }

    /**
     * Is service registred
     *
     * @param string $name Service name
     */
    public function __isset($name)
    {
        if (isset($this->_definitions[$name])) {
            return true;
        }

        if (method_exists($this, '_' . $name)) {
            return true;
        }

        return false;
    }

    /**
     * Get a service
     *
     * Priority:
     * 1. Dynamic by __invoke or offsetSet
     * 2. Static by `_$name` function in container
     * Static definition can by overwrited
     *
     * @param string $name Service name
     */
    public function __get($name)
    {
        if (isset($this->_definitions[$name])) {
            return \Fine\Std\ObjectUtils::revive($this->_definitions[$name]);
        }

        if (method_exists($this, '_' . $name)) {
            return $this->{"_$name"}();
        }

        return null;
    }

    /**
     * Get a service
     *
     * Alias to __get
     *
     * @param string $name Service name
     */
    public function __call($name)
    {
        $this->$name;
    }
    
    public function offsetSet($key, $val)
    {
        $this->_definitions[$key] = $val;
    }    

}

