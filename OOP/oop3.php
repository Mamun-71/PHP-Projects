<?php

class Person{
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    //Methods

    public function __construct($name,$eyeColor,$age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;

    }

    public function __destruct()
    {

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}