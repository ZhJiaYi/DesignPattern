<?php


namespace DesignPattern\Visitor;
include "AnimalOperation.php";

class Jump implements AnimalOperation
{

    function visitMonkey(Monkey $monkey)
    {
        // TODO: Implement visitMonkey() method.
        echo 'jump high';
    }

    function visitorLion(Lion $lion)
    {
        // TODO: Implement visitorLion() method.
        echo 'jump low';
    }
}