<?php

namespace Frame;

class Factory
{
    public static function createDatabase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}
