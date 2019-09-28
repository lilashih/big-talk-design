<?php

namespace Bridge\ConcreteImplementor;

use Bridge\Implementor\HandsetSoft;

class HandsetAddressList extends HandsetSoft
{
    public function run(): void
    {
        echo "運行手機通訊錄".PHP_EOL;
    }
}