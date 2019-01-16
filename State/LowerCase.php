<?php


namespace DesignPattern\State;
include "WritingState.php";

class LowerCase implements WritingState
{

    function write($word)
    {
        // TODO: Implement write() method.
        return strtolower($word);
    }
}