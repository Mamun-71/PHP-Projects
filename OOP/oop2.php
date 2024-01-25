<?php

class Person {
    private $first = "Daniel";
    private $last = "Nielson";
    private $age = "28";
}

class Pet extends Person{

    private function owner()
    {
        $a = $this->first;
        return $a;
    }
}