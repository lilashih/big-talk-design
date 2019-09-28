<?php

namespace Builder\Builder;

abstract class PersonalBuilder
{
    abstract public function buildHead();
    abstract public function buildBody();
    abstract public function buildArmLeft();
    abstract public function buildArmRight();
    abstract public function buildLegLeft();
    abstract public function buildLegRight();
}