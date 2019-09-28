<?php

namespace Factory\Operation;

class OperationMul extends Operation
{
    public function getResult()
    {
        $result = $this->numA * $this->numB;

        return $result;
    }
}