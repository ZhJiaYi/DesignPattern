<?php


namespace DesignPattern\Adapter;


class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}