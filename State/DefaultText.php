<?php


namespace DesignPattern\State;


class DefaultText implements WritingState
{

    function write($word)
    {
        // TODO: Implement write() method.
        return $word;
    }
}