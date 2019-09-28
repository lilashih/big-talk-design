<?php

namespace Visitor\ConcreteElement;

use Visitor\Element\Person;
use Visitor\Visitor\Action;

class Man extends Person
{
    public $name = "男人";

    public function accept(Action $visitor)
    {
        $visitor->getManConclusion($this);
    }
}