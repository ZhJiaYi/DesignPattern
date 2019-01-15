<?php


namespace DesignPattern\Command;


interface Command
{
    function exec();

    function undo();

    function redo();
}