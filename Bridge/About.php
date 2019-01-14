<?php

namespace DesignPattern\Bridge;
include 'WebPage.php';
include 'AquaTheme.php';

/**
 * Class About
 * @package DesignPattern\Bridge
 * 桥接模式
 */
class About implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    function getContent()
    {
        echo "about 的页面颜色是{$this->theme->getColor()}";
        // TODO: Implement getContent() method.
        return ;
    }
}

$about = new About(new AquaTheme());

$about->getContent();