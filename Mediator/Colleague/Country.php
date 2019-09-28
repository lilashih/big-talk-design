<?php

namespace Mediator\Colleague;

use Mediator\Mediator\UnitedNations;

abstract class Country
{
    protected $mediator;

    public function __construct(UnitedNations $mediator)
    {
        $this->mediator = $mediator;
    }
}