<?php

namespace FactoryMethod\Operation\ConcreteFactory;

use FactoryMethod\Operation\Factory\IFactory;
use FactoryMethod\Operation\ConcreteOperation\OperationAdd;
use FactoryMethod\Operation\Operation\Operation;

class AddFactory implements IFactory
{
    public function createOperation() : Operation
    {
        return new OperationAdd();
    }
}