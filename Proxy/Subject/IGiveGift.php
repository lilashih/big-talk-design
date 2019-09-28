<?php

namespace Proxy\Subject;

/**
 * 聲明了真實主題和代理主題的公共接口
 */
interface IGiveGift
{
    public function giveDolls();
    public function giveFollowers();
    public function giveChocolate();
}