<?php

namespace Frame\Databases;

use Frame\Contract\Database;

class MySQL implements Database
{
    protected $conn;
    public function connect(Array $config)
    {
        extract($config);
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysql_query($query, $this->conn);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}
