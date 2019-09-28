<?php

namespace Delegation\ConcreteObserver;

class StockObserver
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function closeStockMarket($subject)
    {
        echo $subject->action.": ";
        echo $this->name."，關閉股票行情，繼續工作。".PHP_EOL;
    }
}