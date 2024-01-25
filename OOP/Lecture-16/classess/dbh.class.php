<?php

class Dbh {

    private $host = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "oopphp16";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->$host .';dbName =' . $this->dbName;
        $pdo = new PDO($dsn,$this->userName,$this->passWord);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo; 
    }
}