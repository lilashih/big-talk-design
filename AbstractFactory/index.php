<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use AbstractFactory\ConcreteFactory\SqlServerFactory;
use AbstractFactory\ConcreteFactory\AccessFactory;
use AbstractFactory\DB\DB;

echo "使用抽象工廠模式".PHP_EOL;
// 若要改成Access時，需修改成new AccessFactory();
$factory = new SqlServerFactory();

$iu = $factory->createUser();
$iu->insert();
$iu->get(1);

$id = $factory->createDepartment();
$id->insert();
$id->get(1);

// 不需要AbstractFactory及ConcreteFactory的部分，直接使用實際的實例
echo PHP_EOL."使用簡單工廠來改進抽象工廠模式".PHP_EOL;
$iu = DB::createUser();

$iu->insert();
$iu->get(1);

$id = DB::createDepartment();
$id->insert();
$id->get(1);