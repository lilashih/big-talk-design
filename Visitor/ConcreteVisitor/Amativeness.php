<?php

namespace Visitor\ConcreteVisitor;

use Visitor\ConcreteElement\Man;
use Visitor\ConcreteElement\Woman;
use Visitor\Visitor\Action;

class Amativeness extends Action
{
    protected $type = "戀愛";

    public function getManConclusion(Man $concreteElement)
    {
        echo "{$concreteElement->name}{$this->type}時，凡是不懂也要裝懂".PHP_EOL;
    }

    public function getWomanConclusion(Woman $concreteElement)
    {
        echo "{$concreteElement->name}{$this->type}時，遇事懂也裝不懂".PHP_EOL;
    }
}