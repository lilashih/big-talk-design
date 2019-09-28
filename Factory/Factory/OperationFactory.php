<?php

namespace Factory\Factory;

use Factory\Operation\OperationAdd;
use Factory\Operation\OperationSub;
use Factory\Operation\OperationMul;
use Factory\Operation\OperationDiv;

class OperationFactory
{
    public function createOperation($operate)
    {
        switch ($operate)
        {
            case "+":
                $oper = new OperationAdd();
                break;
            case "-":
                $oper = new OperationSub();
                break;
            case "*":
                $oper = new OperationMul();
                break;
            case "/":
                $oper = new OperationDiv();
                break;
            default:
                throw new \Exception("運算子未定義");
                break;
        }

        return $oper;
    }
}