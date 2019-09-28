<?php

namespace AbstractFactory\ConcreteProduct\User;

use AbstractFactory\AbstractProduct\IUser;

class AccessUser implements IUser
{
    public function insert()
    {
        echo "在Access中給User資料表插入一筆紀錄".PHP_EOL;
    }

    public function get($id)
    {
        echo "在Access中根據id得到User資料表的一筆紀錄".PHP_EOL;
    }
}