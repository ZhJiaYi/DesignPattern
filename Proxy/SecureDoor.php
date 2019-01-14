<?php


namespace DesignPattern\Proxy;
include "LabDoor.php";

/**
 * Class SecureDoor
 * @package DesignPattern\Proxy
 * 代理模式
 */
class SecureDoor
{
    protected $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password = '')
    {
        if ($this->auth($password)) {
            echo $this->door->open();
            return $this->door->open();
        } else {
            echo '你是谁';
        }
    }

    public function auth($password)
    {
        return $password == '123456';
    }

    public function close()
    {
        echo $this->door->close();
        return;
    }
}

$secureDoor = new SecureDoor(new LabDoor());
$secureDoor->open('123456');
$secureDoor->close();