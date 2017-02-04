<?php

namespace Frame;

class Register
{
    protected static $objects = [];
    public static function set($alias, $object)
    {
        self::$objests[$alias] = $object;
    }

    public static function get($alias)
    {
        if(!array_key_exists($alias, self::$objects)) {
            return null;
        }
        return self::$objects[$alias];
    }

    public static function isRegistered($alias)
    {
        return array_key_exists($alias, self::$objests);
    }

    public static function remove($alias)
    {
        unset(self::$objests[$alias]);
    }
}

/*
namespace Frame;

use ArrayObject;

class Register extends ArrayObject
{
    // protected static $objects = [];
    private static $instance;

    public static function getInstance()
    {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }
        return $instance;
    }

    public static function set($alias, $object)
    {
        self::$instance->offsetSet($alias, $object);
        // self::$objests[$alias] = $object;
    }

    public static function get($alias)
    {
        if(self::$instance->offsetExists($alias)) {
            return null;
        }
        return $instance->OffsetGet($alias);
        // if(!array_key_exists($alias, self::$objects)) {
        //     return null;
        // }
        // return self::$objects[$alias];
    }

    public static function isRegistered($alias)
    {
        return self::$instance->offsetExists($alias);
        // return array_key_exists($alias, self::$objests);
    }

    public static function remove($alias)
    {
        self::$instance->offsetUnset($alias);
        // unset(self::$objests[$alias]);
    }
}
*/
