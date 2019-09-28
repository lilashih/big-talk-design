<?php

namespace AbstractFactory\ConcreteProduct\User;

use AbstractFactory\AbstractProduct\IUser;

class SqlServerUser implements IUser
{
    public function insert()
    {
        echo "在SQL Server中給User資料表插入一筆紀錄".PHP_EOL;
    }

    public function get($id)
    {
        echo "在SQL Server中根據id得到User資料表的一筆紀錄".PHP_EOL;
    }
}