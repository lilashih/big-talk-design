<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Strategy\Context\CashContext;

$types = ["0.正常收費", "1.滿300送100", "2.打8折"];
$typesText = implode(", ", $types);
$total = 0;
$stop = true;
do
{
    $type   = dialog("請選擇收銀模式({$typesText})：");
    $price  = dialog("請輸入單價：");
    $unit   = dialog("請輸入數量：");

    $money = $price * $unit;

    $cash = new CashContext($type);
    $amount = $cash->getResult($money);
    $total += $amount;
    echo  "單價：{$price}，數量：{$price}，{$types[$type]}，合計：{$amount}".PHP_EOL.PHP_EOL;

    $stop = (dialog("是否繼續輸入(y/n)：") == 'y') ? true : false;
} while ($stop);

echo  "共：{$total}";
