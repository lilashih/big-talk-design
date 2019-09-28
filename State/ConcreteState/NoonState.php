<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class NoonState implements IState
{
    public function writeProgram(Work $work)
    {
        if ($work->hour < 13) {
            echo "當前時間: {$work->hour}點，犯困，午休".PHP_EOL;

        } else {
            $work->setCurrent(new AfternoonState());
            $work->writeProgram();
        }
    }
}