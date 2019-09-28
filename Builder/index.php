<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Builder\ConcreteBuilder\PersonThinBuilder;
use Builder\ConcreteBuilder\PersonFatBuilder;
use Builder\Director\PersonDirector;

$thin = new PersonDirector(new PersonThinBuilder());
$fat = new PersonDirector(new PersonFatBuilder());

$thin->createPerson();
$fat->createPerson();