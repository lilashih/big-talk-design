<?php

namespace Proxy\RealSubject;

use Proxy\Subject\IGiveGift;
use Proxy\Others\SchoolGirl;

class Pursuit implements IGiveGift
{
    protected $schoolGirl;

    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->schoolGirl = $schoolGirl;
    }

    public function giveDolls()
    {
        echo $this->schoolGirl->name . "送你洋娃娃".PHP_EOL;
    }

    public function giveFollowers()
    {
        echo $this->schoolGirl->name . "送你鮮花".PHP_EOL;
    }

    public function giveChocolate()
    {
        echo $this->schoolGirl->name . "送你巧克力".PHP_EOL;
    }
}