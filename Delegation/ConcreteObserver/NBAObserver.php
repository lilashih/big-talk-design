<?php

namespace Delegation\ConcreteObserver;

class NBAObserver
{
    protected $name;
    protected $subject;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function closeNBADirectSeeding($subject)
    {
        echo $subject->action.": ";
        echo $this->name."，關閉NBA直播，繼續工作。".PHP_EOL;
    }
}