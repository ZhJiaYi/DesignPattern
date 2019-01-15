<?php


namespace DesignPattern\Iterator;


class RadioStation
{
    protected $frequency;

    public function __construct($frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency()
    {
        return $this->frequency;
    }
}