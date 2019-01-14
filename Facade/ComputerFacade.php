<?php


namespace DesignPattern\Facade;
include "Computer.php";
/**
 * Class ComputerFacade
 * @package DesignPattern\Facade
 * 外观模式
 */
class ComputerFacade
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $testTurnOn = '';
        $testTurnOn .= $this->computer->getElectricShock();
        $testTurnOn .= $this->computer->makeSound();
        $testTurnOn .= $this->computer->showLoadingScreen();
        $testTurnOn .= $this->computer->bam();
        echo $testTurnOn;
        return;
    }

    public function turnOff()
    {
        $testTurnOff = '';
        $testTurnOff .= $this->computer->closeEverything();
        $testTurnOff .= $this->computer->pullCurrent();
        $testTurnOff .= $this->computer->sooth();
        echo $testTurnOff;
        return;
    }
}

$computer = new ComputerFacade(new Computer());
$computer->turnOn();
$computer->turnOff();