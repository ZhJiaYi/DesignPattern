<?php


namespace DesignPattern\Visitor;


interface Animal
{
    function accept(AnimalOperation $animalOperation);
}