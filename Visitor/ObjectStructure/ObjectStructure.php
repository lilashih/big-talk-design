<?php

namespace Visitor\ObjectStructure;

use Visitor\Element\Person;
use Visitor\Visitor\Action;

class ObjectStructure
{
    protected $elements = null;

    public function __construct()
    {
        $this->elements = new \SplObjectStorage();
    }

    public function attach(Person $elements)
    {
        $this->elements->attach($elements);
    }

    public function detach(Person $elements)
    {
        $this->elements->detach($elements);
    }

    public function display(Action $visitor)
    {
        foreach ($this->elements as $element)
        {
            $element->accept($visitor);
        }
    }
}