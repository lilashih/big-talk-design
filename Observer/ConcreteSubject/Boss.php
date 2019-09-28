<?php

namespace Observer\ConcreteSubject;

use Observer\Subject\Subject;

class Boss extends Subject
{
    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }
}