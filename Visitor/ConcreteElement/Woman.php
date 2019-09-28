<?php

namespace Visitor\ConcreteElement;

use Visitor\Element\Person;
use Visitor\Visitor\Action;

class Woman extends Person
{
    public $name = "女人";

    public function accept(Action $visitor)
    {
        $visitor->getWomanConclusion($this);
    }
}