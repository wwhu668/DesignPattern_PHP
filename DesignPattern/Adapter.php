<?php
# 适配器模式
# 可以将不同的接口封装成统一的API,如:mysql,mysqli,pdo
instance Database
{
    public function construct(Array $config);
    public function query($sql);
    public function close();
}
class Mysqli implements Database
{
    public function construct($cofig) {
        extract($config);
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
    }
    public function query($sql) {
        // ...
    }
    public function close() {
        // ...
    }
}
class PDO implements PDO
{
    public function construct($config) {
        extract($config);
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    }
    public function query($sql) {
        // ...
    }
    public function close() {
        // ...
    }
}
