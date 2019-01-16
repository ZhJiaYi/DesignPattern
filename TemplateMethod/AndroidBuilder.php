<?php


namespace DesignPattern\TemplateMethod;


class AndroidBuilder extends Builder
{

    function test()
    {
        // TODO: Implement test() method.
        echo 'running android tests';
    }

    function lint()
    {
        // TODO: Implement lint() method.
        echo 'linting the android code';
    }

    function assemble()
    {
        // TODO: Implement assemble() method.
        echo 'assembling the android build';
    }

    function deploy()
    {
        // TODO: Implement deploy() method.
        echo 'deploying android build to server';
    }
}