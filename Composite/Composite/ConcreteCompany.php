<?php

namespace Composite\Composite;

use Composite\Component\Company;

// 有枝節點
class ConcreteCompany extends Company
{
    protected $children = [];

    public function __construct(string $name)
    {
        $this->children = new \SplObjectStorage();
        parent::__construct($name);
    }

    public function add(Company $company)
    {
        $this->children->attach($company);
    }

    public function remove(Company $company)
    {
        $this->children->detach($company);
    }

    public function display(int $depth)
    {
        echo str_repeat("-", $depth)." {$this->name}".PHP_EOL;

        foreach ($this->children as $c)
        {
            $c->display($depth + 1);
        }
    }

    public function lineOfDuty()
    {
        foreach ($this->children as $c)
        {
            $c->lineOfDuty();
        }
    }
}