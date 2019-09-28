<?php

namespace Composite\Leaf;

use Composite\Component\Company;

// 葉節點
class FinanceDepartment extends Company
{
    public function display(int $depth)
    {
        echo str_repeat("-", $depth)." {$this->name}".PHP_EOL;
    }

    public function lineOfDuty()
    {
        echo "{$this->name} 公司財務收支管理".PHP_EOL;
    }
}