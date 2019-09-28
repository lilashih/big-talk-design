<?php

namespace Iterator\ConcreteIterator;

use Iterator\Iterator\Iterator;
use Iterator\ConcreteAggregate\ConcreteAggregate;

// 從後向前遍歷
class ConcreteIteratorDesc implements \Iterator
{
    private $aggregate;
    private $current = 0;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
        $this->rewind();
    }

    public function current()
    {
        return $this->aggregate->getThis($this->current);
    }

    public function next()
    {
        $ret = null;
        $this->current--;

        if ($this->current >= 0) {
            $ret = $this->aggregate->getThis($this->current);
        }

        return $ret;
    }

    public function valid()
    {
        return $this->current < 0 ? false : true;
    }

    public function key()
    {
        return $this->current;
    }

    public function rewind()
    {
        $this->current = $this->aggregate->count() - 1;
    }
}