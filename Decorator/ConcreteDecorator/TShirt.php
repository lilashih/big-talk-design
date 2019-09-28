<?php

namespace Decorator\ConcreteDecorator;

use Decorator\Decorator\Finery;

class TShirt extends Finery
{
    public function show()
    {
        $this->person->show();
        echo "T-shirt";
    }
}