<?php

namespace Adapter\Adapter;

use Adapter\Adaptee\ForeignCenter;
use Adapter\Target\Player;

class Translator extends Player
{
    private $foreignCenter;

    public function __construct(string $name)
    {
        $this->foreignCenter = new ForeignCenter($name);
    }

    public function attack()
    {
        $this->foreignCenter->attackF();
    }

    public function defense()
    {
        $this->foreignCenter->defenseF();
    }
}