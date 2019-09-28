<?php

namespace Command\Command;

use Command\Receiver\Barbecue;

abstract class Command
{
    protected $receiver;

    public function __construct(Barbecue $receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function executeCommand();
}