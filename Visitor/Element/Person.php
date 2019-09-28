<?php

namespace Visitor\Element;

use Visitor\Visitor\Action;

abstract class Person
{
    abstract public function accept(Action $visitor);
}