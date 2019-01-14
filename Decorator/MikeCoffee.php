<?php


namespace DesignPattern\Decorator;
include "Coffee.php";
include "SimpleCoffee.php";

class MikeCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    function getCost()
    {
        // TODO: Implement getCost() method.
        echo $this->coffee->getCost() + 2;
        return;
    }

    function getDescription()
    {
        // TODO: Implement getDescription() method.
        echo $this->coffee->getDescription() . '+牛奶';
        return;
    }
}

$mikeCoffee = new MikeCoffee(new SimpleCoffee());
$mikeCoffee->getCost();
$mikeCoffee->getDescription();