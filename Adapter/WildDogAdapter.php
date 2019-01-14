<?php


namespace DesignPattern\Adapter;
include "Lion.php";
include "WildDog.php";

/**
 * Class WildDogAdapter
 * @package DesignPattern\Adapter
 * 适配器模式
 */
class WildDogAdapter implements Lion
{
    protected $wildDog;

    public function __construct(WildDog $wildDog)
    {
        $this->wildDog = $wildDog;
    }

    function roar()
    {
        // TODO: Implement roar() method.
        return $this->wildDog->bark();
    }
}

$wildDog = new WildDogAdapter(new WildDog());
$wildDog->roar();