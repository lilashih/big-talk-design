<?php

namespace FactoryMethod\LeiFeng\ConcreteFactory;

use FactoryMethod\LeiFeng\Factory\IFactory;
use FactoryMethod\LeiFeng\ConcreteLeiFeng\Undergraduate;
use FactoryMethod\LeiFeng\LeiFeng\LeiFeng;

class UndergraduateFactory implements IFactory
{
    public function createLeiFeng() : LeiFeng
    {
        return new Undergraduate();
    }
}