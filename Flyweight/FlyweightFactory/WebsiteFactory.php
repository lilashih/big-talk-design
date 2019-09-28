<?php

namespace Flyweight\FlyweightFactory;

use Flyweight\ConcreteFlyweight\ConcreteWebsite;
use Flyweight\Flyweight\Website;

class WebsiteFactory
{
    private $flyweights = [];

    public function getWebsiteCategory(string $key) : Website
    {
        if (!array_key_exists($key, $this->flyweights)) {
            $this->flyweights[$key] = new ConcreteWebsite($key);
        }

        return $this->flyweights[$key];
    }

    public function getWebsiteCount() : int
    {
        return count($this->flyweights);
    }
}