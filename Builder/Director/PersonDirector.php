<?php

namespace Builder\Director;

use Builder\Builder\PersonalBuilder;

// 建構一個使用Builder接口的對象
class PersonDirector
{
    private $personBuilder;

    public function __construct(PersonalBuilder $personBuilder)
    {
        $this->personBuilder = $personBuilder;
    }

    public function createPerson()
    {
        $this->personBuilder->buildHead();
        $this->personBuilder->buildBody();
        $this->personBuilder->buildArmLeft();
        $this->personBuilder->buildArmRight();
        $this->personBuilder->buildLegLeft();
        $this->personBuilder->buildLegRight();

        echo "---------------------".PHP_EOL;
    }
}