<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use State\Context\Work;

$work = new Work();

$work->hour = 9;
$work->writeProgram();

$work->hour = 10;
$work->writeProgram();

$work->hour = 12;
$work->writeProgram();

$work->hour = 13;
$work->writeProgram();

$work->hour = 14;
$work->writeProgram();

$work->hour = 17;
$work->writeProgram();

$work->finish = false;
//$work->finish = true;

$work->hour = 19;
$work->writeProgram();

$work->hour = 22;
$work->writeProgram();