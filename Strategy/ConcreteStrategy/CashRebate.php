<?php

namespace Strategy\ConcreteStrategy;

use Strategy\Strategy\ICash;

class CashRebate implements ICash
{
    public $moneyRebate = 0;

    public function __construct($moneyRebate)
    {
        $this->moneyRebate = $moneyRebate / 10;
    }

    public function acceptCash($money)
    {
        return $money * $this->moneyRebate;
    }
}