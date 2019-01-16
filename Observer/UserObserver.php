<?php


namespace DesignPattern\Observer;


use SplSubject;

class UserObserver implements \SplObserver
{

    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        echo get_class($subject) . '被更新';
    }
}