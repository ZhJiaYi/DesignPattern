<?php


namespace DesignPattern\FactoryMethod;


class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        // TODO: Implement makeInterviewer() method.
        return new Developer();
    }
}