<?php

namespace Command\Invoker;

use Command\Command\Command;

class Waiter
{
    private $orders;

    public function __construct()
    {
        $this->orders = new \SplObjectStorage();
    }

    public function setOrder(Command $command)
    {
        if($command == "雞翅") {
            echo "完售：雞翅沒了，請點別的".PHP_EOL;
        } else {
            $this->orders->attach($command);
            echo "增加訂單：{$command}  時間：".$this->getTime().PHP_EOL;
        }
    }

    public function cancelOrder(Command $command)
    {
        $this->orders->detach($command);
        echo "取消訂單：{$command}  時間：".$this->getTime().PHP_EOL;
    }

    public function notify()
    {
        foreach ($this->orders as $cmd)
        {
            $cmd->executeCommand();
        }
    }

    public function getTime()
    {
        return date("Y/m/d h:i:s a", time());
    }
}