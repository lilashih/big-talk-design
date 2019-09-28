<?php

namespace Iterator\Aggregate;

abstract class Aggregate
{
    abstract public function createIterator() : \Iterator;
    abstract public function createDescIterator() : \Iterator;
}