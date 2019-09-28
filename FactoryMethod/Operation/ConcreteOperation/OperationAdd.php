<?php

namespace FactoryMethod\Operation\ConcreteOperation;

use FactoryMethod\Operation\Operation\Operation;

class OperationAdd extends Operation
{
    public function getResult()
    {
        $result = $this->numA + $this->numB;

        return $result;
    }
}