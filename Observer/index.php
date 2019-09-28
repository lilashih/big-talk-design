<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Observer\ConcreteSubject\Boss;
use Observer\ConcreteSubject\Secretary;
use Observer\ConcreteObserver\StockObserver;
use Observer\ConcreteObserver\NBAObserver;

$boss = new Boss();
$secretary = new Secretary();

$employee1 = new StockObserver("員工1");
$employee2 = new NBAObserver("員工2");

$boss->attach($employee1);
$boss->attach($employee2);

$secretary->action = "秘書有事不再前台";
$secretary->detach($employee1);
$secretary->detach($employee2);

$boss->action = "被老闆抓到了";
$boss->detach($employee2);

$secretary->notify();
$boss->notify();