<?php

namespace Frame\Databases;

use Frame\Contract\Database;

class MySQLi implements Database
{
    protected $conn;
    public function connect(Array $config)
    {
        extract($config);
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}
