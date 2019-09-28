<?php

namespace FactoryMethod\Operation\Factory;

use FactoryMethod\Operation\Operation\Operation;

interface IFactory
{
    public function createOperation() : Operation;
}