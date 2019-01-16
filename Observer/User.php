<?php


namespace DesignPattern\Observer;
include "UserObserver.php";

use SplObserver;

/**
 * Class User
 * @package DesignPattern\Observer
 * 观察者模式
 */
class User implements \SplSubject
{
    public $observers;
    protected $data = [];

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
        //通知观察者用户被改变
        $this->notify();
    }
}

$userObserver = new UserObserver();
$user = new User();
$user->attach($userObserver);//绑定观察者
$user->data = ['123' => 123];
