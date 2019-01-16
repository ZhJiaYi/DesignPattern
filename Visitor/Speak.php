<?php


namespace DesignPattern\Visitor;
include "AnimalOperation.php";
include "Monkey.php";

class Speak implements AnimalOperation
{

    function visitMonkey(Monkey $monkey)
    {
        // TODO: Implement visitMonkey() method.
        $monkey->shout();
    }

    function visitorLion(Lion $lion)
    {
        // TODO: Implement visitorLion() method.
        $lion->roar();
    }
}

$speak = new Speak();
$speak->visitMonkey(new Monkey());