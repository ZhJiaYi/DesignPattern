<?php


namespace DesignPattern\Command;
include "On.php";
include "Bulb.php";

/**
 * Class RemoteControl
 * @package DesignPattern\Command
 * 命令行模式
 */
class RemoteControl
{
    public function submit(Command $command)
    {
        return $command->exec();
    }
}

$remote = new RemoteControl();

echo $remote->submit(new On(new Bulb()));