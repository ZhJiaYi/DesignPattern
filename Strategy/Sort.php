<?php


namespace DesignPattern\Strategy;
include "BubbleSortStrategy.php";
/**
 * Class Sort
 * @package DesignPattern\Strategy
 * 策略模式
 */
class Sort
{
    protected $sort;

    public function __construct(SortStrategy $sortStrategy)
    {
        $this->sort = $sortStrategy;
    }

    public function sort($data)
    {
        echo $this->sort->sort($data);
    }
}

$sort = new Sort(new BubbleSortStrategy());
$sort->sort('11111');