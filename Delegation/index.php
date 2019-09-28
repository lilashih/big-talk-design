<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Delegation\ConcreteSubject\Boss;
use Delegation\ConcreteSubject\Secretary;
use Delegation\ConcreteObserver\StockObserver;
use Delegation\ConcreteObserver\NBAObserver;

$boss = new Boss();
$secretary = new Secretary();

$employee1 = new StockObserver("員工1");
$employee2 = new NBAObserver("員工2");

$boss->event($employee1, "closeStockMarket");
$boss->event($employee2, "closeNBADirectSeeding");

$boss->action = "被老闆抓到了";

$boss->notify();