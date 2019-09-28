<?php

function dialog($string)
{
    echo $string;
    $handle = fopen("php://stdin", "r");
    return trim(fgets($handle));
}