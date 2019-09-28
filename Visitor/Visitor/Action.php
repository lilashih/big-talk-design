<?php

namespace Visitor\Visitor;

use Visitor\ConcreteElement\Man;
use Visitor\ConcreteElement\Woman;

abstract class Action
{
    abstract public function getManConclusion(Man $concreteElement);

    abstract public function getWomanConclusion(Woman $concreteElement);
}