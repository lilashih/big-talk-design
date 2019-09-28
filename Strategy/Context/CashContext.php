<?php

namespace Strategy\Context;

use Strategy\ConcreteStrategy\CashNormal;
use Strategy\ConcreteStrategy\CashReturn;
use Strategy\ConcreteStrategy\CashRebate;

class CashContext
{
    public $csuper;

    public function __construct(String $type)
    {
        switch ($type)
        {
            case 0:
                $this->csuper = new CashNormal();
                break;
            case 1:
                $this->csuper = new CashReturn(300, 100);
                break;
            case 2:
                $this->csuper = new CashRebate(8);
                break;
            default:
                throw new \Exception("收銀模式未定義");
                break;
        }
    }

    public function getResult($money)
    {
        return $this->csuper->acceptCash($money);
    }
}