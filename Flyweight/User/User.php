<?php

namespace Flyweight\User;

class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
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