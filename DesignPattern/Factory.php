<?php
# 工厂模式
# 对一个类实现统一实例化
class Factory
{
    public static function createDatabase() {
        $obj = Database::getInstance();// new Database();
        return $obj;
    }
}
