<?php

namespace Bridge\RefinedAbstraction;

use Bridge\Abstraction\HandsetBrand;

class HandsetBrandM extends HandsetBrand
{
    public function run(): void
    {
        $this->soft->run();
    }
}