<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Mediator\ConcreteColleague\USA;
use Mediator\ConcreteColleague\Iraq;
use Mediator\ConcreteMediator\SecurityCouncil;

$securityCouncil = new SecurityCouncil();

$usa = new USA($securityCouncil);
$iraq = new Iraq($securityCouncil);

$securityCouncil->colleague1 = $usa;
$securityCouncil->colleague2 = $iraq;

$usa->declare("貿易協商暫定3月份");
$iraq->declare("好，就3月");

