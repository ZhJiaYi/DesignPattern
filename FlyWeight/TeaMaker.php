<?php


namespace DesignPattern\FlyWeight;
include "KarakTea.php";

class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            //缓存
            $this->availableTea[$preference] = new KarakTea();
        }
        return $this->availableTea[$preference];
    }

    public function getTeas()
    {
        return $this->availableTea;
    }
}