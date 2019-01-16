<?php


namespace DesignPattern\State;

class UpperCase implements WritingState
{

    function write($word)
    {
        // TODO: Implement write() method.
        return strtoupper($word);
    }
}