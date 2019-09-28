<?php

namespace Mediator\ConcreteColleague;

use Mediator\Colleague\Country;

class USA extends Country
{
    public function declare(string $message)
    {
        $this->mediator->declare($message, $this);
    }

    public function getMessage(string $message)
    {
        echo "美國獲得對方訊息: {$message}".PHP_EOL;
    }
}