<?php

namespace Interpreter\Factory;

use Interpreter\TerminalExpression\Scale;
use Interpreter\TerminalExpression\Note;
use Interpreter\TerminalExpression\Speed;

class Factory
{
    public static function create($str)
    {
        $expression = null;

        switch ($str)
        {
            case "O":
                $expression = new Scale();
                break;
            case "C":
            case "D":
            case "E":
            case "F":
            case "G":
            case "A":
            case "B":
            case "P":
                $expression = new Note();
                break;
            case "T":
                $expression = new Speed();
                break;
        }

        return $expression;
    }
}