<?php


namespace DesignPattern\Decorator;


class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    function getCost()
    {
        // TODO: Implement getCost() method.
        echo $this->coffee->getCost() + 3;
        return;

    }

    function getDescription()
    {
        // TODO: Implement getDescription() method.
        echo $this->coffee->getDescription() . '+香草';
        return;
    }
}