<?php


namespace DesignPattern\FlyWeight;
include "TeaMaker.php";
/**
 * Class TeaShop
 * @package DesignPattern\FlyWeight
 * 享元模式 共享对象
 */
class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder($teaType, $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        $testMsg = '';
        foreach ($this->orders as $table => $tea) {
            $testMsg .= 'serving tea to table#' . $table;
        }
        echo $testMsg;
        return;
    }

    public function getOrders()
    {
        var_dump($this->orders);
        return $this->orders;
    }
}

$teaShop = new TeaShop(new TeaMaker());
$teaShop->takeOrder('红茶', 1);
$teaShop->takeOrder('绿茶', 2);
$teaShop->takeOrder('红茶', 3);
$teaShop->serve();
$teaShop->getOrders();