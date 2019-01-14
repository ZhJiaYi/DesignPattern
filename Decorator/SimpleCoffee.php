<?php


namespace DesignPattern\Decorator;


class SimpleCoffee implements Coffee
{

    function getCost()
    {
        // TODO: Implement getCost() method.
        return 10;
    }

    function getDescription()
    {
        // TODO: Implement getDescription() method.
        return '简单咖啡';
    }
}