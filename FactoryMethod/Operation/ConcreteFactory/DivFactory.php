<?php

namespace FactoryMethod\Operation\ConcreteFactory;

use FactoryMethod\Operation\Factory\IFactory;
use FactoryMethod\Operation\ConcreteOperation\OperationDiv;
use FactoryMethod\Operation\Operation\Operation;

class DivFactory implements IFactory
{
    public function createOperation() : Operation
    {
        return new OperationDiv();
    }
}