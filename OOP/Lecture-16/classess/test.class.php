<?php

class Test extends Dbh{

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);

        while($row = stmt->fetch())
        {
            echo $row['users_firstname'] . '<br>';
        }
    }

    public function getUsersStmt($firstname, $lastname)
    {
        $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->excute([$firstname,$lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name)
        {
            echo $row['users_firstname'] . '<br>';
        }
    }

    public function setUsersStmt($firstname, $lastname, $dob)
    {
        $sql = "INSERT INTO users(users_firstname,user_lastname,user_dateofbirth) VALUES (?,?,?)";
        $stmt->excute([$firstname,$lastname,$dob]);
    }

}

?>