<?php

namespace Builder\ConcreteBuilder;

use Builder\Builder\PersonalBuilder;

class PersonThinBuilder extends PersonalBuilder
{
    public function buildHead()
    {
        echo "瘦子的頭".PHP_EOL;
    }

    public function buildBody()
    {
        echo "瘦子的身體".PHP_EOL;
    }

    public function buildArmLeft()
    {
        echo "瘦子的左手".PHP_EOL;
    }

    public function buildArmRight()
    {
        echo "瘦子的右手".PHP_EOL;
    }

    public function buildLegLeft()
    {
        echo "瘦子的左腿".PHP_EOL;
    }

    public function buildLegRight()
    {
        echo "瘦子的右腿".PHP_EOL;
    }
}