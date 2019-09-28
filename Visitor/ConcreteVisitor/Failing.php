<?php

namespace Visitor\ConcreteVisitor;

use Visitor\ConcreteElement\Man;
use Visitor\ConcreteElement\Woman;
use Visitor\Visitor\Action;

class Failing extends Action
{
    protected $type = "失敗";

    public function getManConclusion(Man $concreteElement)
    {
        echo "{$concreteElement->name}{$this->type}時，悶頭喝酒，誰也不用券".PHP_EOL;
    }

    public function getWomanConclusion(Woman $concreteElement)
    {
        echo "{$concreteElement->name}{$this->type}時，淚眼汪汪，誰也勸不了".PHP_EOL;
    }
}