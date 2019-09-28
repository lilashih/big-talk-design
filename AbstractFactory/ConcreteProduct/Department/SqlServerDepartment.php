<?php

namespace AbstractFactory\ConcreteProduct\Department;

use AbstractFactory\AbstractProduct\IDepartment;

class SqlServerDepartment implements IDepartment
{
    public function insert()
    {
        echo "在SQL Server中給Department資料表插入一筆紀錄".PHP_EOL;
    }

    public function get($id)
    {
        echo "在SQL Server中根據id得到Department資料表的一筆紀錄".PHP_EOL;
    }
}