<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class ForenoonState implements IState
{
    public function writeProgram(Work $work)
    {
        if ($work->hour < 12) {
            echo "當前時間: {$work->hour}點，上午工作精神百倍".PHP_EOL;

        } else {
            $work->setCurrent(new NoonState());
            $work->writeProgram();
        }
    }
}