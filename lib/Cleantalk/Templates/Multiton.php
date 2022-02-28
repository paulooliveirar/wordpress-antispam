<?php

namespace Cleantalk\Templates;

trait Multiton
{
    use Singleton;

    protected static $instances = array();

    /**
     * Constructor
     *
     * @param string $instance The wished instance
     * @param \Cleantalk\Common\DTO $params Additional parameters to pass in the init() method to initialize the instance
     *
     * @return $this
     */
    public static function getInstance($instance, \Cleantalk\Common\DTO $params = null)
    {
        if ( ! isset(static::$instances[$instance]) ) {
            static::$instances[$instance] = new static();
            static::$instances[$instance]->init($params);
        }

        return static::$instances[$instance];
    }
}
