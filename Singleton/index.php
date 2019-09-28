<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Singleton\Singleton\Singleton;
use Singleton\Singleton\NoSingleton;

$i = Singleton::getInstance();
$j = Singleton::getInstance();
if ($i === $j) {
    echo "單例模式".PHP_EOL;
}

$k = new NoSingleton();
$h = new NoSingleton();
if ($k !== $h) {
    echo "非單例模式".PHP_EOL;
}