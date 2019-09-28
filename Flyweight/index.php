<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Flyweight\FlyweightFactory\WebsiteFactory;
use Flyweight\User\User;
use Flyweight\UnsharedConcreteFlyweight\UnsharedConcreteFlyweight;

$websiteFactory = new WebsiteFactory();

$website1 = $websiteFactory->getWebsiteCategory("產品展示");
// 當調用Flyweight對象的操作時，再將User狀態傳給它
$website1->use(new User("小菜"));

// 共享上方的物件，不再實例化
$website2 = $websiteFactory->getWebsiteCategory("產品展示");
$website2->use(new User("大鳥"));

$website3 = $websiteFactory->getWebsiteCategory("部落格");
$website3->use(new User("嬌嬌"));

$website4 = $websiteFactory->getWebsiteCategory("部落格");
$website4->use(new User("小明"));

$website5 = new UnsharedConcreteFlyweight("Unshared部落格");
$website5->use(new User("小美"));

echo "實例化總數: {$websiteFactory->getWebsiteCount()}".PHP_EOL;