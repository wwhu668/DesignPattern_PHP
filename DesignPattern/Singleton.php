<?php
# 单例模式
# 一个类只允许实例化一次：如数据库类
class Database
{
    private $instance;
    private function __construct(){}
    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
