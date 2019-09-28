<?php

namespace Bridge\Abstraction;

use Bridge\Implementor\HandsetSoft;

abstract class HandsetBrand
{
    protected $soft;

    public function setHandSoft(HandsetSoft $soft)
    {
        $this->soft = $soft;
    }

    abstract public function run() : void;
}