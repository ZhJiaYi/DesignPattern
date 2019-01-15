<?php


namespace DesignPattern\Command;
include "Command.php";

class On implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    function exec()
    {
        // TODO: Implement exec() method.
        return $this->bulb->on();
    }

    function undo()
    {
        // TODO: Implement undo() method.
        return $this->bulb->off();
    }

    function redo()
    {
        // TODO: Implement redo() method.
        return $this->exec();
    }
}