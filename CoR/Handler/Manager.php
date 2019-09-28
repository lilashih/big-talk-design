<?php

namespace CoR\Handler;

abstract class Manager
{
    protected $name;
    protected $superior;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // 設置上級主管
    public function setSuperior(Manager $superior)
    {
        $this->superior = $superior;
    }

    abstract public function requestApplication($applicant, $requestType, $requestNumber) : void;
}