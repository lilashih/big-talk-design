<?php

namespace Delegation\Subject;

abstract class Subject
{
    private $observers = null;
    private $action;

    public function event($class, $func)
    {
        $this->observers[] = [
            'obj' => $class,
            'func' => $func
        ];
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            call_user_func([$observer['obj'], $observer['func']], $this);
        }
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}