<?php

namespace CoR\ConcreteHandler;

use CoR\Handler\Manager;

class Majordomo extends Manager
{
    public function requestApplication($applicant, $requestType, $requestNumber): void
    {
        if ($requestType == "請假" && $requestNumber <= 5) {
            echo "{$this->name}:{$applicant}申請{$requestType}{$requestNumber}天被批准".PHP_EOL;
        } else {
            if ($this->superior != null) {
                $this->superior->requestApplication($applicant, $requestType, $requestNumber);
            }
        }
    }
}