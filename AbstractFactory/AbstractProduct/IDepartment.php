<?php

namespace AbstractFactory\AbstractProduct;

interface IDepartment
{
    public function insert();
    public function get($id);
}