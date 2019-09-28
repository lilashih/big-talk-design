<?php

namespace Adapter\Target;

abstract class Player
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function attack();
    abstract public function defense();
}