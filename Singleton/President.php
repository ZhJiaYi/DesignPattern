<?php


namespace DesignPattern\Singleton;

/**
 * Class President
 * @package DesignPattern\Singleton
 * 单例模式
 */
final class President
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * __wakeup()是用在反序列化操作中。unserialize()会检查存在一个__wakeup()方法。如果存在，则先会调用__wakeup()方法。
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}