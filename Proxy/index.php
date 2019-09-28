<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Proxy\Proxy\Proxy;
use Proxy\Others\SchoolGirl;

$schoolGirl = new SchoolGirl("李嬌嬌");
$proxy = new Proxy($schoolGirl);

$proxy->giveDolls();
$proxy->giveFollowers();
$proxy->giveChocolate();