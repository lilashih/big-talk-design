<?php

namespace Decorator\ConcreteDecorator;

use Decorator\Decorator\Finery;

class BigTrouser extends Finery
{
    public function show()
    {
        $this->person->show();
        echo "垮褲";
    }
}