<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Decorator\ConcreteComponent\Person;
use Decorator\ConcreteDecorator\TShirt;
use Decorator\ConcreteDecorator\BigTrouser;

$person = new Person("小菜");

$person = new TShirt($person);
$person = new BigTrouser($person);

$person->show();
