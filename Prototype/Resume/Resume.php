<?php

namespace Prototype\Resume;

class Resume extends ResumeNoClone
{
    // 當clone發生時會執行
    public function __clone()
    {
        $this->work = clone $this->work;
    }
}