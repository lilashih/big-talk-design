<?php

namespace Factory\Operation;

class OperationAdd extends Operation
{
    public function getResult()
    {
        $result = $this->numA + $this->numB;

        return $result;
    }
}