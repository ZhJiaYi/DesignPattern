<?php


namespace DesignPattern\Bridge;
include "Theme.php";

class AquaTheme implements Theme
{

    function getColor()
    {
        // TODO: Implement getColor() method.
        return '水母色';
    }
}