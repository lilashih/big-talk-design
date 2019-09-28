<?php

namespace Mediator\Mediator;

use Mediator\Colleague\Country;

abstract class UnitedNations
{
    abstract public function declare(string $message, Country $colleague);
}