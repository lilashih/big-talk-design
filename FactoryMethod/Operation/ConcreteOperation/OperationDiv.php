<?php

namespace FactoryMethod\Operation\ConcreteOperation;

use FactoryMethod\Operation\Operation\Operation;

class OperationDiv extends Operation
{
    public function getResult()
    {
        if ($this->numB == 0) {
            throw new \Exception("除数不得为0");
        }

        $result = $this->numA / $this->numB;

        return $result;
    }
}