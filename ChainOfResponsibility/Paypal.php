<?php


namespace DesignPattern\ChainOfResponsibility;


class Paypal extends Account
{
    protected $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}