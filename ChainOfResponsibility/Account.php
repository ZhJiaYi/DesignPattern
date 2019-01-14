<?php


namespace DesignPattern\ChainOfResponsibility;


abstract class Account
{
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay($money)
    {
        if ($this->canPay($money)) {
            echo 'success' . get_called_class();
            return 'success' . get_called_class();
        } elseif ($this->successor) {
            return $this->successor->pay($money);
        } else {
            echo 'fail';
            return 'fail';
        }
    }

    public function canPay($money)
    {
        return $this->balance >= $money;
    }
}