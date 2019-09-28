<?php

namespace AbstractFactory\DB;

// 使用簡單工廠來改進抽象工廠模式
class DB
{
    private static $db;

    public function init()
    {
        $config = require_once 'config.php';
        self::$db = $config['db'];
    }

    public static function createUser()
    {
        $className = 'AbstractFactory\\ConcreteProduct\\User\\' . self::$db . 'User';
        return new $className;
    }

    public static function createDepartment()
    {
        $className = 'AbstractFactory\\ConcreteProduct\\Department\\' . self::$db . 'Department';
        return new $className;
    }

}(function () {
    static::init();
})->bindTo(null, DB::class)();