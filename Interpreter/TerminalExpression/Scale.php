<?php

namespace Interpreter\TerminalExpression;

use Interpreter\AbstractExpression\Expression;

class Scale extends Expression
{
    public function execute($key, $value): void
    {
        $scale = "";

        switch (intval($value))
        {
            case 1:
                $scale = "低音";
                break;
            case 2:
                $scale = "中音";
                break;
            case 3:
                $scale = "高音";
                break;
        }

        echo "{$scale} ";
    }
}