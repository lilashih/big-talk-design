<?php

namespace Facade\Facade;

use Facade\Subsystem\Stock1;
use Facade\Subsystem\Stock2;
use Facade\Subsystem\Realty1;
use Facade\Subsystem\NationalDebt1;

class Facade
{
    static public function register()
    {
        $stock1 = new Stock1();
        $stock2 = new Stock2();
        $realty1 = new Realty1();
        $nationalDebt1 = new NationalDebt1();

        $stock1->buy();
        $stock2->buy();
        $realty1->buy();
        $nationalDebt1->buy();

        echo "-----------------".PHP_EOL;
        $stock1->sell();
        $stock2->sell();
        $realty1->sell();
        $nationalDebt1->sell();
    }
}