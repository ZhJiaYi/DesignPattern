<?php


namespace DesignPattern\Facade;


class Computer
{
    public function getElectricShock()
    {
        return 'Ouch';
    }

    public function makeSound()
    {
        return 'Beep Beep';
    }

    public function showLoadingScreen()
    {
        return 'Loading';
    }

    public function bam()
    {
        return 'ready to be used';
    }

    public function closeEverything()
    {
        return 'bup bup bup buzzzz';
    }

    public function sooth()
    {
        return 'zzzz';
    }

    public function pullCurrent()
    {
        return 'haaah';
    }
}