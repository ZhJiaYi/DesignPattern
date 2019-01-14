<?php


namespace DesignPattern\Bridge;


class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    function getContent()
    {
        // TODO: Implement getContent() method.
        return "careers 页面的颜色是{$this->theme->getColor()}";
    }
}