<?php

namespace State\Context;

use State\ConcreteState\ForenoonState;
use State\State\IState;

class Work
{
    private $current;
    private $hour;
    private $finish;

    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }

    public function setCurrent(IState $state)
    {
        $this->current = $state;
    }

    public function writeProgram()
    {
        $this->current->writeProgram($this);
    }
}