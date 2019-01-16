<?php


namespace DesignPattern\TemplateMethod;


abstract class Builder
{
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    abstract function test();

    abstract function lint();

    abstract function assemble();

    abstract function deploy();
}