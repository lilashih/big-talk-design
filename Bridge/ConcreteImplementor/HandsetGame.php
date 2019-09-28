<?php

namespace Bridge\ConcreteImplementor;

use Bridge\Implementor\HandsetSoft;

class HandsetGame extends HandsetSoft
{
    public function run(): void
    {
        echo "運行手機遊戲".PHP_EOL;
    }
}