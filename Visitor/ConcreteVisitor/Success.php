<?php

namespace Visitor\ConcreteVisitor;

use Visitor\ConcreteElement\Man;
use Visitor\ConcreteElement\Woman;
use Visitor\Visitor\Action;

class Success extends Action
{
    protected $type = "成功";

    public function getManConclusion(Man $concreteElement)
    {
        echo "{$this->type}的{$concreteElement->name}，背後多半有位偉大的女人".PHP_EOL;
    }

    public function getWomanConclusion(Woman $concreteElement)
    {
        echo "{$this->type}的{$concreteElement->name}，背後多半有位不成功的男人".PHP_EOL;
    }
}