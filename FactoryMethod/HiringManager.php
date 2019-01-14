<?php


namespace DesignPattern\FactoryMethod;


abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();

        return $interviewer->askQuestion();
    }

}