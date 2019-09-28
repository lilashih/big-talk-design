<?php

namespace Proxy\Proxy;

use Proxy\Subject\IGiveGift;
use Proxy\RealSubject\Pursuit;
use Proxy\Others\SchoolGirl;

/**
 * 代理對象內部含有對真實對象的引用，從而操作真實對象，同時代理對象提供與真實對象相同的接口，以便在任何時刻都能代替真實對象
 * 同時，代理對象可以在執行真實對像操作時，附加其他的操作，相當於對真實對象進行封裝
 */
class Proxy implements IGiveGift
{
    protected $pursuit;

    public function __construct(SchoolGirl $schoolGirl)
    {
        // 真實對象的引用
        $this->pursuit = new Pursuit($schoolGirl);
    }

    public function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    public function giveFollowers()
    {
        $this->pursuit->giveFollowers();
    }

    public function giveChocolate()
    {
        $this->pursuit->giveChocolate();
    }
}