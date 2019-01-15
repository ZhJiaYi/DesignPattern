<?php


namespace DesignPattern\Command;


class Bulb
{
    public function on()
    {
        return '开灯';
    }

    public function off()
    {
        return '关灯';
    }
}