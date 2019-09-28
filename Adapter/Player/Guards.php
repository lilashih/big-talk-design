<?php

namespace Adapter\Player;

use Adapter\Target\Player;

class Guards extends Player
{
    public function attack()
    {
        echo "後衛{$this->name}進攻".PHP_EOL;
    }

    public function defense()
    {
        echo "後衛{$this->name}防守".PHP_EOL;
    }
}