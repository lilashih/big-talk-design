<?php

namespace Observer\ConcreteObserver;

class StockObserver implements \SplObserver
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $subject->action.": ";
        echo $this->name."，關閉股票行情，繼續工作。".PHP_EOL;
    }
}