<?php

namespace Iterator\ConcreteAggregate;

use Iterator\Aggregate\Aggregate;
use Iterator\ConcreteIterator\ConcreteIterator;
use Iterator\ConcreteIterator\ConcreteIteratorDesc;

class ConcreteAggregate extends Aggregate
{
    private $items = [];

    public function createIterator() : \Iterator
    {
        return new ConcreteIterator($this);
    }

    public function createDescIterator() : \Iterator
    {
        return new ConcreteIteratorDesc($this);
    }

    public function count() : int
    {
        return count($this->items);
    }

    public function getThis(int $index)
    {
        return $this->items[$index];
    }

    public function setThis(int $index, $value)
    {
        $this->items[$index] = $value;
    }
}