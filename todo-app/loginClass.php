<?php

class Login  extends Dbh
{

    protected function getUser($userName, $password)
    {
        // $stmt = $this->connect()->prepare('SELECT password FROM users WHERE user_name = ? OR email = ?)');
        $sql = "SELECT * FROM users WHERE user_name = '".$userName."' AND password = '".$password."'";

    
        try {
            $result = $this->connect()->query($sql)->fetch();
            echo var_dump($result);
        } catch (mysqli_sql_exception $e) {
            $e->getMessage();
            die();
        }
    }
 
}
