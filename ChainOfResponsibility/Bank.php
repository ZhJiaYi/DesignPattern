<?php


namespace DesignPattern\ChainOfResponsibility;
include "Account.php";
include "Paypal.php";
include "Bitcoin.php";

/**
 * Class Bank
 * @package DesignPattern\ChainOfResponsibility
 * 责任链模式
 */
class Bank extends Account
{
    protected $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

$bank = new Bank(100);
$bank->setNext(new Paypal(200));
$bank->setNext(new Bitcoin(500));
$bank->pay(50);
