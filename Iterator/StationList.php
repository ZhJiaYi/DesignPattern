<?php


namespace DesignPattern\Iterator;
include "RadioStation.php";

/**
 * Class StationList
 * @package DesignPattern\Iterator
 * 迭代器模式
 */
class StationList implements \Countable, \Iterator
{
    protected $stations = [];
    protected $counter;

    public function add(RadioStation $radioStation)
    {
        $this->stations[] = $radioStation;
    }

    public function remove(RadioStation $radioStation)
    {
        $toRemoveFrequency = $radioStation->getFrequency();
        //array_filter该函数把输入数组中的每个键值传给回调函数。如果回调函数返回 true，则把输入数组中的当前键值返回结果数组中。数组键名保持不变。
        return $this->stations = array_filter($this->stations, function (RadioStation $radioStation) use ($toRemoveFrequency) {
            echo $radioStation->getFrequency() !== $toRemoveFrequency;
            return $radioStation->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function get()
    {
        return $this->stations;
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        // TODO: Implement current() method.
        return $this->stations[$this->counter];
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        // TODO: Implement next() method.
        $this->counter++;
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        // TODO: Implement key() method.
        return $this->counter;
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        // TODO: Implement valid() method.
        return isset($this->stations[$this->counter]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->counter = 0;
    }

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        // TODO: Implement count() method.
        return count($this->stations);
    }
}

$station = new StationList();
$station->add(new RadioStation('10hz'));
$station->add(new RadioStation('20hz'));
$station->add(new RadioStation('30hz'));
$station->add(new RadioStation('40hz'));

echo $station->count() . PHP_EOL;
//var_dump($station->get());
$station->rewind();
$station->next();
//var_dump($station->current());
$station->next();
$station->next();
echo $station->valid() . PHP_EOL;
$station->next();
$station->next();
echo $station->key() . PHP_EOL;
echo $station->valid();
$station->remove(new RadioStation('20hz'));
var_dump($station->get());