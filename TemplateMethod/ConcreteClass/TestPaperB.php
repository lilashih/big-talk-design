<?php

namespace TemplateMethod\ConcreteClass;

use TemplateMethod\AbstractClass\TestPaper;

class TestPaperB extends TestPaper
{
    public function answer1()
    {
        return "b";
    }

    public function answer2()
    {
        return "b";
    }

    public function answer3()
    {
        return "b";
    }
}