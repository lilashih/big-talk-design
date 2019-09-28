<?php

namespace FactoryMethod\LeiFeng\Factory;

use FactoryMethod\LeiFeng\LeiFeng\LeiFeng;

interface IFactory
{
    public function createLeiFeng() : LeiFeng;
}