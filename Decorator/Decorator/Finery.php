<?php

namespace Decorator\Decorator;

use Decorator\Component\IComponent;

abstract class Finery implements IComponent
{
    protected $person;

    public function __construct(IComponent $person)
    {
        $this->person = $person;
    }

    public function show()
    {
        $this->person->show();
    }
}