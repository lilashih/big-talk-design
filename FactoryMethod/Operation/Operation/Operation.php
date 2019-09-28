<?php

namespace FactoryMethod\Operation\Operation;

abstract class Operation
{
    public $numA = 0;
    public $numB = 0;

    public function getResult()
    {
        $result = 0;
        return $result;
    }
}