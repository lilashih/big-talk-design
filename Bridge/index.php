<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Bridge\RefinedAbstraction\HandsetBrandN;
use Bridge\RefinedAbstraction\HandsetBrandM;
use Bridge\ConcreteImplementor\HandsetGame;
use Bridge\ConcreteImplementor\HandsetAddressList;

$ab = new HandsetBrandN();
$ab->setHandSoft(new HandsetGame());
$ab->run();
$ab->setHandSoft(new HandsetAddressList());
$ab->run();

$ab = new HandsetBrandM();
$ab->setHandSoft(new HandsetGame());
$ab->run();
$ab->setHandSoft(new HandsetAddressList());
$ab->run();
