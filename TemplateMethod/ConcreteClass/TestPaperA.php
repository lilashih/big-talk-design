<?php

namespace TemplateMethod\ConcreteClass;

use TemplateMethod\AbstractClass\TestPaper;

class TestPaperA extends TestPaper
{
    public function answer1()
    {
        return "a";
    }

    public function answer2()
    {
        return "a";
    }

    public function answer3()
    {
        return "a";
    }
}