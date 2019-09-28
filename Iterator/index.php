<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Iterator\ConcreteAggregate\ConcreteAggregate;

$a = new ConcreteAggregate();
$a->setThis(0, "大鳥");
$a->setThis(1, "小菜");
$a->setThis(2, "行李");
$a->setThis(3, "老外");
$a->setThis(4, "員工");
$a->setThis(5, "小偷");


/*********************** Iterator ***********************/
echo "-- 從前向後遍歷 --".PHP_EOL;
$i = $a->createIterator($a);

// 實現\Iterator接口的物件就可以透過foreach來迭代的物件
foreach ($i as $k => $v)
{
    echo "{$v}請買車票".PHP_EOL;
}

echo PHP_EOL."-- 從後向前遍歷 --".PHP_EOL;
$ides = $a->createDescIterator($a);
foreach ($ides as $k => $v)
{
    echo "{$v}請買車票".PHP_EOL;
}
/*********************** Iterator ***********************/

/*********************** Generator ***********************/
echo PHP_EOL."-- Generator遍歷 --".PHP_EOL;
// 不須實作Iterator，只要透過一個function把資料回傳給yield，就一樣可以使用foreach來遍歷
function getPassenger($a)
{
    for ($j = 0; $j < $a->count(); $j++)
    {
        yield $a->getThis($j);
    }
}
foreach (getPassenger($a) as $v)
{
    echo "{$v}請買車票".PHP_EOL;
}