<?php

namespace Decorator\ConcreteComponent;

use Decorator\Component\IComponent;

class Person implements IComponent
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo $this->name;
    }
}