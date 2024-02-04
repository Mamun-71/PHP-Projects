<?php

class Dbh
{
    protected function connect()
    {
        try{
            //code...
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=todo', $username, $password);
            return $dbh;
        }
        catch(PDOException $e)
        {
            print "Error!: ". $e->getMessage() . "<br/>";
            die();
         }
    }
   
}
