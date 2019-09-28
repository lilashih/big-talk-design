<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use FactoryMethod\Operation\ConcreteFactory\AddFactory;
use FactoryMethod\LeiFeng\ConcreteFactory\UndergraduateFactory;
use FactoryMethod\LeiFeng\ConcreteFactory\VolunteerFactory;

// 計算機
$add = new AddFactory();
$addReal = $add->createOperation();
$addReal->numA = 1;
$addReal->numB = 2;
echo "1+2=".$addReal->getResult().PHP_EOL.PHP_EOL;

// 雷鋒
$f1 = new UndergraduateFactory();
$student1 = $f1->createLeiFeng();

$f2 = new VolunteerFactory();
$volunteer1 = $f2->createLeiFeng();

$student1->buyRice();
$student1->sweep();
$student1->wash();
