<?php

namespace AbstractFactory\AbstractProduct;

interface IUser
{
    public function insert();
    public function get($id);
}