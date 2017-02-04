<?php
# 注册器模式
# 将对象存入数组
class Register
{
    private static $objects;
    public static function set($alias, $object) {
        self::$objects[$alias] = $object;
    }
    public static function get($alias) {
        if(!isset($objects[$alias])) {
            return null;
        }
        return $objects[$alias];
    }
    public static function remove($alias) {
        unset($objects[$alias]);
    }
}
