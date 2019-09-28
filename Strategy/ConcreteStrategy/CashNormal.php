<?php

namespace Strategy\ConcreteStrategy;

use Strategy\Strategy\ICash;

class CashNormal implements ICash
{
    public function acceptCash($money)
    {
        return $money;
    }
}