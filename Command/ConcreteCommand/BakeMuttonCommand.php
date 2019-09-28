<?php

namespace Command\ConcreteCommand;

use Command\Command\Command;

class BakeMuttonCommand extends Command
{
    public function executeCommand()
    {
        $this->receiver->bakeMutton();
    }

    public function __toString()
    {
        return "羊肉串";
    }
}