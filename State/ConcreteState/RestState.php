<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class RestState implements IState
{
    public function writeProgram(Work $work)
    {
        echo "當前時間: {$work->hour}點，下班回家了".PHP_EOL;
    }
}