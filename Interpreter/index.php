<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Interpreter\Context\PlayContext;
use Interpreter\Factory\Factory;

$context = new PlayContext();
$context->text = "T 500 O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 O 1 A 0.5";

$expression = null;
try {
    while ($context->text !== null)
    {
        $str = substr($context->text, 0, 1);

        $expression = Factory::create($str);
        $expression->interpret($context);
    }
} catch (\Exception $e) {
    echo $e.PHP_EOL;
}