<?php

namespace Flyweight\Flyweight;

use Flyweight\User\User;

abstract class Website
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function use(User $user) : void;
}