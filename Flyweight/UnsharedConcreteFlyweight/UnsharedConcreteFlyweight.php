<?php

namespace Flyweight\UnsharedConcreteFlyweight;

use Flyweight\Flyweight\Website;
use Flyweight\User\User;

class UnsharedConcreteFlyweight extends Website
{
    public function use(User $user): void
    {
        echo "Unshared網站分類: {$this->name} (用戶: {$user->name})".PHP_EOL;
    }
}