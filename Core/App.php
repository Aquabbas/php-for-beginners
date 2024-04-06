<?php

namespace Core;

class App
{
    protected static $container;

    // Note: When I call this method, I give it my container opbject and it saves it on the "$container" property.
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }


    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}
