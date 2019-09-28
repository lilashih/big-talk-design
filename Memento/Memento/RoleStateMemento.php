<?php

namespace Memento\Memento;

class RoleStateMemento
{
    private $vit;
    private $atk;
    private $def;

    public function __construct($vit, $atk, $def)
    {
        $this->vit = $vit;
        $this->atk = $atk;
        $this->def = $def;
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}