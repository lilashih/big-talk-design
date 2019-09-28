<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Visitor\ObjectStructure\ObjectStructure;
use Visitor\ConcreteElement\Man;
use Visitor\ConcreteElement\Woman;
use Visitor\ConcreteVisitor\Success;
use Visitor\ConcreteVisitor\Failing;
use Visitor\ConcreteVisitor\Amativeness;

$objectStructure = new ObjectStructure();
$objectStructure->attach(new Man());
$objectStructure->attach(new Woman());

$objectStructure->display(new Success());
$objectStructure->display(new Failing());
$objectStructure->display(new Amativeness());