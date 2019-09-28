<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Command\Receiver\Barbecue;
use Command\ConcreteCommand\BakeMuttonCommand;
use Command\ConcreteCommand\BakeChickenWingCommand;
use Command\Invoker\Waiter;

$barbecue = new Barbecue();

$bakeMuttonCommand1 = new BakeMuttonCommand($barbecue);
$bakeMuttonCommand2 = new BakeMuttonCommand($barbecue);
$bakeChickenWingCommand1 = new BakeChickenWingCommand($barbecue);

$waiter = new Waiter();
$waiter->setOrder($bakeMuttonCommand1);
$waiter->setOrder($bakeMuttonCommand2);
$waiter->setOrder($bakeChickenWingCommand1);
$waiter->cancelOrder($bakeMuttonCommand2);

$waiter->notify();