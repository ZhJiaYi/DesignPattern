<?php


namespace DesignPattern\AbstractFactory;
include "DoorFittingExpert.php";

class Carpenter implements DoorFittingExpert
{

    function gerDescription()
    {
        // TODO: Implement gerDescription() method.
        echo '我可以修实木门';
        return;
    }
}