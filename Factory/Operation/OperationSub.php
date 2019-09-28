<?php

namespace Factory\Operation;

class OperationSub extends Operation
{
    public function getResult()
    {
        $result = $this->numA - $this->numB;

        return $result;
    }
}