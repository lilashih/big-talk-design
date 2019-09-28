<?php

namespace Interpreter\AbstractExpression;

use Interpreter\Context\PlayContext;

abstract class Expression
{
    public function interpret(PlayContext $context)
    {
        if ($context->text == null) {
            return;

        } else {
            $arr = explode(" " , $context->text);

            $playKey = $arr[0];
            $playValue = $arr[1];
            $arr = array_splice($arr, 2);

            // 移除被擷取的字串
            $context->text = (count($arr) == 0) ? null : implode($arr, " ");

            $this->execute($playKey, $playValue);
        }
    }

    abstract public function execute($key, $value) : void;
}