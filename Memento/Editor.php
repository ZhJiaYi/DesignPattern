<?php


namespace DesignPattern\Memento;
include "EditorMemento.php";

/**
 * Class Editor
 * @package DesignPattern\Memento
 * 备忘录模式
 */
class Editor
{
    protected $context = '';

    public function add($context)
    {
        $this->context = $this->context . ' ' . $context;
    }

    public function getContent()
    {
        return $this->context;
    }

    public function save()
    {
        return new EditorMemento($this->context);
    }

    public function restore(EditorMemento $editorMemento)
    {
        $this->context = $editorMemento->getContent();
    }
}

$editor = new Editor();

$editor->add('这是新内容');
$editor->add('这是第二段内容');

$editor->save();

echo $editor->getContent() . PHP_EOL;

$editor->add('这是第三段内容');

echo $editor->getContent() . PHP_EOL;

//TODO 不太理解
$editor->restore(new EditorMemento($editor->getContent()));

echo $editor->getContent() . PHP_EOL;