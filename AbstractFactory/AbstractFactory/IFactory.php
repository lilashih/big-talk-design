<?php

namespace AbstractFactory\AbstractFactory;

interface IFactory
{
    public function createUser();
    public function createDepartment();
}