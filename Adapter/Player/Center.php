<?php

namespace Adapter\Player;

use Adapter\Target\Player;

class Center extends Player
{
    public function attack()
    {
        echo "中鋒{$this->name}進攻".PHP_EOL;
    }

    public function defense()
    {
        echo "中鋒{$this->name}防守".PHP_EOL;
    }
}