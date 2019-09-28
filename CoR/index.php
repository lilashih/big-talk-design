<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use CoR\ConcreteHandler\CommonManager;
use CoR\ConcreteHandler\GeneralManager;
use CoR\ConcreteHandler\Majordomo;

$commonManager = new CommonManager("經理");
$generalManager = new Majordomo("總監");
$majordomo = new GeneralManager("總經理");

// 設置上級主管
$commonManager->setSuperior($generalManager);
$generalManager->setSuperior($majordomo);

$commonManager->requestApplication("小菜", "請假", 1);
$commonManager->requestApplication("小菜", "請假", 4);
$commonManager->requestApplication("小菜", "加薪", 500);
$commonManager->requestApplication("小菜", "加薪", 1000);