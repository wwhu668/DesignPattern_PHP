<?php

namespace Frame\Databases;

use Frame\Contract\Database;

class PDO implements Database
{
    protected $conn;
    public function connect(Array $config)
    {
        extract($config);
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }
}
