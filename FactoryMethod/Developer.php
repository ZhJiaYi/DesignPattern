<?php

namespace DesignPattern\FactoryMethod;
include "Interviewer.php";

class Developer implements Interviewer
{
    public function askQuestion()
    {
        echo '开发问题';
        return;
    }
}
