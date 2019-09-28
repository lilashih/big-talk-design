<?php

namespace Strategy\ConcreteStrategy;

use Strategy\Strategy\ICash;

class CashReturn implements ICash
{
    public $moneyCondition;
    public $moneyReturn;

    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash($money)
    {
        $result = $money;
        if ($money >= $this->moneyCondition) {
            $result = $money - (int)($money / $this->moneyCondition) * $this->moneyReturn;
        }

        return $result;
    }
}