<?php


namespace DesignPattern\Proxy;
include "Door.php";

class LabDoor implements Door
{

    function open()
    {
        // TODO: Implement open() method.
        return '开门';
    }

    function close()
    {
        // TODO: Implement close() method.
        return '关门';
    }
}