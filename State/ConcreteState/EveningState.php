<?php

namespace State\ConcreteState;

use State\State\IState;
use State\Context\Work;

class EveningState implements IState
{
    public function writeProgram(Work $work)
    {
        if ($work->finish) {
            $work->setCurrent(new RestState());
            $work->writeProgram();

        } else {

            if ($work->hour < 21) {
                echo "當前時間: {$work->hour}點，加班，疲累之極".PHP_EOL;

            } else {
                $work->setCurrent(new SleepingState());
                $work->writeProgram();
            }
        }
    }
}