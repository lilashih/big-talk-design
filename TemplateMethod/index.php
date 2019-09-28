<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use TemplateMethod\ConcreteClass\TestPaperA;
use TemplateMethod\ConcreteClass\TestPaperB;

$testPaperA = new TestPaperA();
$testPaperA->testQuestion1();
$testPaperA->testQuestion2();
$testPaperA->testQuestion3();

echo "-----------------------------".PHP_EOL;

$testPaperB = new TestPaperB();
$testPaperB->testQuestion1();
$testPaperB->testQuestion2();
$testPaperB->testQuestion3();