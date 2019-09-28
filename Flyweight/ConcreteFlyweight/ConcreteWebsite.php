<?php

namespace Flyweight\ConcreteFlyweight;

use Flyweight\Flyweight\Website;
use Flyweight\User\User;

class ConcreteWebsite extends Website
{
    // 內部狀態儲存於ConcreteFlyweight中
    public function use(User $user): void
    {
        echo "網站分類: {$this->name} (用戶: {$user->name})".PHP_EOL;
    }
}