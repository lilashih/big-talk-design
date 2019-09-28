<?php

namespace State\State;

use State\Context\Work;

interface IState
{
    public function writeProgram(Work $work);
}