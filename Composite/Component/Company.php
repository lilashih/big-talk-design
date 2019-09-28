<?php

namespace Composite\Component;

abstract class Company
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Company $company){}
    public function remove(Company $company){}
    public function display(int $depth){}
    public function lineOfDuty(){}
}