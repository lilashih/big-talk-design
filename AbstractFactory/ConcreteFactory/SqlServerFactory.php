<?php

namespace AbstractFactory\ConcreteFactory;

use AbstractFactory\AbstractFactory\IFactory;
use AbstractFactory\ConcreteProduct\Department\SqlServerDepartment;
use AbstractFactory\ConcreteProduct\User\SqlServerUser;

class SqlServerFactory implements IFactory
{
    public function createUser()
    {
        return new SqlServerUser();
    }

    public function createDepartment()
    {
        return new SqlServerDepartment();
    }
}
