<?php

namespace Adapter\Adaptee;

class ForeignCenter
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attackF()
    {
        echo "外籍中鋒{$this->name}進攻".PHP_EOL;
    }

    public function defenseF()
    {
        echo "外籍中鋒{$this->name}防守".PHP_EOL;
    }
}