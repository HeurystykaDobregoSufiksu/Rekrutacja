<?php


class App
{
    protected static $registry =[];

    public static function set($key, $val){
        static::$registry[$key]=$val;
    }

    public static function get($key){
        if(!array_key_exists($key,static::$registry))
        {
            throw new Exception("Key not found");
        }
        return static::$registry[$key];
    }

}