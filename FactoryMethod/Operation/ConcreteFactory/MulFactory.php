<?php

namespace FactoryMethod\Operation\ConcreteFactory;

use FactoryMethod\Operation\Factory\IFactory;
use FactoryMethod\Operation\ConcreteOperation\OperationMul;
use FactoryMethod\Operation\Operation\Operation;

class MulFactory implements IFactory
{
    public function createOperation() : Operation
    {
        return new OperationMul();
    }
}