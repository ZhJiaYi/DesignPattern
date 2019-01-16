<?php


namespace DesignPattern\State;
include "LowerCase.php";
include "UpperCase.php";

/**
 * Class TextEditor
 * @package DesignPattern\State
 * 状态模式
 */
class TextEditor
{
    protected $writingState;

    public function __construct(WritingState $writingState)
    {
        $this->writingState = $writingState;
    }

    public function setState(WritingState $writingState)
    {
        $this->writingState = $writingState;
    }

    public function type($word)
    {
        echo $this->writingState->write($word);
    }
}

$textEditor = new TextEditor(new UpperCase());
//
//$textEditor->type('asdfasga');

$textEditor->setState(new LowerCase());

$textEditor->type('ASDASJH');