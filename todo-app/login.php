<?php

//instantiate LoginController class
    include "database.php";
    include "loginClass.php";
    include "loginController.php";

if (isset($_POST["login-submit"])) {


    //Grabbing the data
    $userName = $_POST["user_name"];
    $password = $_POST["password"];

    $login = new LoginController($userName, $password);

    //Running error handlers and user login
     $login->loginUser();

    // if (!$logged) {
    // Going to back to front page
    header("location:index.php");
}

