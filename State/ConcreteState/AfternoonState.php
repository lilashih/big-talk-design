<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class AfternoonState implements IState
{
    public function writeProgram(Work $work)
    {
        if ($work->hour < 17) {
            echo "當前時間: {$work->hour}點，下午狀態還不錯，繼續努力".PHP_EOL;

        } else {
            $work->setCurrent(new EveningState());
            $work->writeProgram();
        }
    }
}