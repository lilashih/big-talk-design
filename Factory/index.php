<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Factory\Factory\OperationFactory;

$numA       = dialog("請輸入數字A：");
$operate    = dialog("請選擇運算符號(+-*/)：");
$numB       = dialog("請輸入數字B：");

$factory = new OperationFactory();
$formula = $factory->createOperation($operate);
$formula->numA = $numA;
$formula->numB = $numB;
$result = $formula->getResult();

echo $result;