<?php

namespace Builder\ConcreteBuilder;

use Builder\Builder\PersonalBuilder;

class PersonFatBuilder extends PersonalBuilder
{
    public function buildHead()
    {
        echo "胖子的頭".PHP_EOL;
    }

    public function buildBody()
    {
        echo "胖子的身體".PHP_EOL;
    }

    public function buildArmLeft()
    {
        echo "胖子的左手".PHP_EOL;
    }

    public function buildArmRight()
    {
        echo "胖子的右手".PHP_EOL;
    }

    public function buildLegLeft()
    {
        echo "胖子的左腿".PHP_EOL;
    }

    public function buildLegRight()
    {
        echo "瘦子的右腿".PHP_EOL;
    }
}