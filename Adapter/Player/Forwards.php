<?php

namespace Adapter\Player;

use Adapter\Target\Player;

class Forwards extends Player
{
    public function attack()
    {
        echo "前鋒{$this->name}進攻".PHP_EOL;
    }

    public function defense()
    {
        echo "前鋒{$this->name}防守".PHP_EOL;
    }
}