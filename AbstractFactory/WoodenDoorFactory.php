<?php


namespace DesignPattern\AbstractFactory;
include "DoorFactory.php";
include "WoodenDoor.php";
include "Carpenter.php";

/**
 * Class WoodenDoorFactory
 * @package DesignPattern\AbstractFactory
 * 抽象工厂方法模式
 */
class WoodenDoorFactory implements DoorFactory
{

    function makeDoor(): Door
    {
        // TODO: Implement makeDoor() method.
        return new WoodenDoor();
    }

    function makeFittingExpert(): DoorFittingExpert
    {
        // TODO: Implement makeFittingExpert() method.
        return new Carpenter();
    }
}

$woodenDoor = new WoodenDoorFactory();

$woodenDoor->makeDoor()->getDescription();
$woodenDoor->makeFittingExpert()->gerDescription();