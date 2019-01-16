<?php


namespace DesignPattern\Visitor;
include "Animal.php";

class Monkey implements Animal
{

    public function shout()
    {
        echo 'ooh oo aa aa!';
    }

    function accept(AnimalOperation $animalOperation)
    {
        // TODO: Implement accept() method.
        $animalOperation->visitMonkey($this);
    }
}
