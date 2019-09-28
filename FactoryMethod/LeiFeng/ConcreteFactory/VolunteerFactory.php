<?php

namespace FactoryMethod\LeiFeng\ConcreteFactory;

use FactoryMethod\LeiFeng\Factory\IFactory;
use FactoryMethod\LeiFeng\ConcreteLeiFeng\Volunteer;
use FactoryMethod\LeiFeng\LeiFeng\LeiFeng;

class VolunteerFactory implements IFactory
{
    public function createLeiFeng() : LeiFeng
    {
        return new Volunteer();
    }
}