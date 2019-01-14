<?php


namespace DesignPattern\AbstractFactory;


interface DoorFactory
{
    function makeDoor(): Door;

    function makeFittingExpert(): DoorFittingExpert;
}