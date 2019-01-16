<?php


namespace DesignPattern\Strategy;
include "SortStrategy.php";

class BubbleSortStrategy implements SortStrategy
{

    function sort($data)
    {
        // TODO: Implement sort() method.
        return '使用冒泡排序';
    }
}