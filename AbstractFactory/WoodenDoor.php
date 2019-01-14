<?php


namespace DesignPattern\AbstractFactory;
include "Door.php";

class WoodenDoor implements Door
{

    function getDescription()
    {
        // TODO: Implement getDescription() method.
        echo '我是实木门';
        return;
    }
}