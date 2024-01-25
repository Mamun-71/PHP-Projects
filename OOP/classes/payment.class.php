<?php

//Interfaces

interface PaymentInterface{
    public function payNow();
}

interface LoginInterface{
    public function loginFirst();
}

class Paypal implements PaymentInterface , LoginInterface{

    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }

}

class BankTransfer implements PaymentInterface, LoginInterface{

    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType){
        $paymentType->payNow(); 
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
buyProduct->pay($paymentType);