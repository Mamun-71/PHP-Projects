<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
    }
}