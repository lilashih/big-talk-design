<?php

namespace Command\ConcreteCommand;

use Command\Command\Command;

class BakeChickenWingCommand extends Command
{
    public function executeCommand()
    {
        $this->receiver->bakeChickenWing();
    }

    public function __toString()
    {
        return "雞翅";
    }
}