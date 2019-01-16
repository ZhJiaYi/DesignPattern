<?php


namespace DesignPattern\TemplateMethod;
include "Builder.php";

class IosBuilder extends Builder
{

    function test()
    {
        // TODO: Implement test() method.
        echo 'running ios tests' . PHP_EOL;
    }

    function lint()
    {
        // TODO: Implement lint() method.
        echo 'linting the ios code' . PHP_EOL;
    }

    function assemble()
    {
        // TODO: Implement assemble() method.
        echo 'assembling the ios build' . PHP_EOL;
    }

    function deploy()
    {
        // TODO: Implement deploy() method.
        echo 'deploying ios build to server' . PHP_EOL;
    }
}


$ios = new IosBuilder();
$ios->build();