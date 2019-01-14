<?php


namespace DesignPattern\Bridge;


interface WebPage
{
    public function __construct(Theme $theme);

    function getContent();
}