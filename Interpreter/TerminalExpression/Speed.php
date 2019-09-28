<?php

namespace Interpreter\TerminalExpression;

use Interpreter\AbstractExpression\Expression;

class Speed extends Expression
{
    public function execute($key, $value): void
    {
        $speed = "";

        if ($value < 500) {
            $speed = "慢速";
        } else if ($value >= 1000) {
            $speed = "快速";
        } else {
            $speed = "中速";
        }

        echo "{$speed} ";
    }
}