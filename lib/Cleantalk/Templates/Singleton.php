<?php

namespace Cleantalk\Templates;

if (! trait_exists('Cleantalk\Templates\Singleton')) {
    trait Singleton
    {
        protected static $instance;

        public function __construct()
        {
        }

        public function __wakeup()
        {
        }

        public function __clone()
        {
        }

        /**
         * Constructor
         * @return $this
         */
        public static function getInstance(\Cleantalk\Common\DTO $params = null)
        {
            if ( ! isset(static::$instance) ) {
                static::$instance = new static();
                static::$instance->init($params);
            }
            return static::$instance;
        }

        /**
         * Alternative constructor
         */
        protected function init(\Cleantalk\Common\DTO $params = null)
        {
        }
    }
}
