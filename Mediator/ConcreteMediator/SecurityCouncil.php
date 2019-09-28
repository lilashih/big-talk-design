<?php

namespace Mediator\ConcreteMediator;

use Mediator\Colleague\Country;
use Mediator\Mediator\UnitedNations;
use Mediator\ConcreteColleague\USA;
use Mediator\ConcreteColleague\Iraq;

class SecurityCouncil extends UnitedNations
{
    private $colleague1;
    private $colleague2;

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function declare(string $message, Country $colleague)
    {
        if ($colleague == $this->colleague1) {
            $this->colleague2->getMessage($message);

        } else {
            $this->colleague1->getMessage($message);

        }
    }
}