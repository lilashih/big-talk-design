<?php

namespace FactoryMethod\Operation\ConcreteFactory;

use FactoryMethod\Operation\Factory\IFactory;
use FactoryMethod\Operation\ConcreteOperation\OperationSub;
use FactoryMethod\Operation\Operation\Operation;

class SubFactory implements IFactory
{
    public function createOperation() : Operation
    {
        return new OperationSub();
    }
}