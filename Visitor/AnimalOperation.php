<?php


namespace DesignPattern\Visitor;


interface AnimalOperation
{
    function visitMonkey(Monkey $monkey);

    function visitorLion(Lion $lion);
}