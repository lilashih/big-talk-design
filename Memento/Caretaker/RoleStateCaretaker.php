<?php

namespace Memento\Caretaker;

use Memento\Memento\RoleStateMemento;

class RoleStateCaretaker
{
    private $memento;

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}