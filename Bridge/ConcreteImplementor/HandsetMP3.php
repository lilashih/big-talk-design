<?php

namespace Bridge\ConcreteImplementor;

use Bridge\Implementor\HandsetSoft;

class HandsetMP3 extends HandsetSoft
{
    public function run(): void
    {
        echo "運行手機MP3".PHP_EOL;
    }
}