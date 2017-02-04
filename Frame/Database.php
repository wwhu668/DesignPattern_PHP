<?php

namespace Frame;

class Database
{
    protected static $db;
    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(empty(self::$db)) {
            self::$db = new self();
        }
        return self::$db;
    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }
}
