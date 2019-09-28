<?php

namespace Iterator\ConcreteIterator;

use Iterator\ConcreteAggregate\ConcreteAggregate;

class ConcreteIterator implements \Iterator
{
    private $aggregate;
    private $current = 0;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function current()
    {
        return $this->aggregate->getThis($this->current);
    }

    public function next()
    {
        $ret = null;
        $this->current++;

        if ($this->current < $this->aggregate->count()) {
            $ret = $this->aggregate->getThis($this->current);
        }

        return $ret;
    }

    public function valid()
    {
        return $this->current >= $this->aggregate->count() ? false : true;
    }

    public function key()
    {
        return $this->current;
    }

    public function rewind()
    {
        $this->current = 0;
    }
}