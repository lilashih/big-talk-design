<?php

namespace TemplateMethod\AbstractClass;

abstract class TestPaper
{
    public function testQuestion1()
    {
        echo "Q: 1 + 1 = ? ".PHP_EOL;
        echo "a. 0\t";
        echo "b. 1\t";
        echo "c. 2\t";
        echo "d. 3".PHP_EOL;
        echo "A: ".$this->answer1().PHP_EOL.PHP_EOL;
    }

    public function testQuestion2()
    {
        echo "Q: 1 * 1 = ? ".PHP_EOL;
        echo "a. 0\t";
        echo "b. 1\t";
        echo "c. 2\t";
        echo "d. 3".PHP_EOL;
        echo "A: ".$this->answer2().PHP_EOL.PHP_EOL;
    }

    public function testQuestion3()
    {
        echo "Q: 1 - 1 = ? ".PHP_EOL;
        echo "a. 0\t";
        echo "b. 1\t";
        echo "c. 2\t";
        echo "d. 3".PHP_EOL;
        echo "A: ".$this->answer3().PHP_EOL.PHP_EOL;
    }

    public function answer1(){}
    public function answer2(){}
    public function answer3(){}
}