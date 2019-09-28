<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Adapter\Player\Forwards;
use Adapter\Player\Guards;
use Adapter\Player\Center;
use Adapter\Adapter\Translator;

$forwards = new Forwards("Tom");
$forwards->attack();

$guards = new Guards("Bob");
$guards->attack();

$center = new Center("Alex");
$center->attack();

$centerF = new Translator("小明");
$centerF->attack();