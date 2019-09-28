<?php

namespace Interpreter\TerminalExpression;

use Interpreter\AbstractExpression\Expression;

class Note extends Expression
{
    public function execute($key, $value): void
    {
        $note = "";

        switch ($key)
        {
            case "C":
                $note = "do";
                break;
            case "D":
                $note = "re";
                break;
            case "E":
                $note = "mi";
                break;
            case "F":
                $note = "fa";
                break;
            case "G":
                $note = "so";
                break;
            case "A":
                $note = "la";
                break;
            case "B":
                $note = "si";
                break;
            case "P":
                $note = "休止符";
                break;
        }

        echo "{$note} ";
    }
}