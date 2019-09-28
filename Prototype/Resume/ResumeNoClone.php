<?php

namespace Prototype\Resume;

use Prototype\WorkExperience\WorkExperience;

class ResumeNoClone
{
    public $name;
    public $sex;
    public $age;

    public $work;

    public function __construct(string $name)
    {
        /**
         * 注意：淺複製(shallow copy)
         * 物件裡的物件
         */
        $this->work = new WorkExperience();

        $this->name = $name;
    }

    public function setPersonalInfo(string $sex, int $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setWorkExperience(string $timeArea, string $company)
    {
        $this->work->timeArea = $timeArea;
        $this->work->company = $company;
    }

    public function display()
    {
        echo $this->name." ".$this->sex." ".$this->age."歲，";
        echo "工作經歷: ".$this->work->timeArea." ".$this->work->company.PHP_EOL;
    }
}