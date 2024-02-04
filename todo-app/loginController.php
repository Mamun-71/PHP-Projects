<?php

class LoginController extends Login {

    
    private $userName;
    private $password;
    

    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            //echo "Empty input";
            header("location:index.php?error=emptyiput");
            exit();
        }


        $this->getUser($this->userName, $this->password);
    }


    public function emptyInput()
    {

        $result = true;

        if ( empty($this->userName) || empty($this->password) ) {
            $result = false;
        }

        return $result;
    }

}