<?php

namespace Composite\Leaf;

use Composite\Component\Company;

// 葉節點
class HRDepartment extends Company
{
    public function display(int $depth)
    {
        echo str_repeat("-", $depth)." {$this->name}".PHP_EOL;
    }

    public function lineOfDuty()
    {
        echo "{$this->name} 員工招聘培訓管理".PHP_EOL;
    }
}