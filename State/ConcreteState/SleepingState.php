<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class SleepingState implements IState
{
    public function writeProgram(Work $work)
    {
        echo "當前時間: {$work->hour}點不行了，睡著了".PHP_EOL;
    }
}