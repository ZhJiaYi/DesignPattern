<?php


namespace DesignPattern\FactoryMethod;
include "HiringManager.php";
include "Developer.php";

/**
 * Class DevelopmentManager
 * @package DesignPattern\FactoryMethod
 * 工厂方法模式
 */
class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        // TODO: Implement makeInterviewer() method.

        return new Developer();
    }

}

$developmentManager = new DevelopmentManager();
$developmentManager->takeInterview();