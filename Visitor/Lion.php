<?php


namespace DesignPattern\Visitor;


class Lion implements Animal
{
    public function roar()
    {
        echo 'roaar!';
    }

    function accept(AnimalOperation $animalOperation)
    {
        // TODO: Implement accept() method.
        $animalOperation->visitorLion($this);
    }
}