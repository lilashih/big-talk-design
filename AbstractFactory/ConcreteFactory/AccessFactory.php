<?php

namespace AbstractFactory\ConcreteFactory;

use AbstractFactory\AbstractFactory\IFactory;
use AbstractFactory\ConcreteProduct\User\AccessUser;
use AbstractFactory\ConcreteProduct\Department\AccessDepartment;

class AccessFactory implements IFactory
{
    public function createUser()
    {
        return new AccessUser();
    }

    public function createDepartment()
    {
        return new AccessDepartment();
    }
}
