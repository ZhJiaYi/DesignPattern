<?php


namespace DesignPattern\Memento;


class EditorMemento
{
    protected $context;

    public function __construct($context)
    {
        $this->context = $context;
    }

    public function getContent()
    {
        return $this->context;
    }
}