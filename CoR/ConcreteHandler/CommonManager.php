<?php

namespace CoR\ConcreteHandler;

use CoR\Handler\Manager;

class CommonManager extends Manager
{
    public function requestApplication($applicant, $requestType, $requestNumber): void
    {
        if ($requestType == "請假" && $requestNumber <= 2) {
            echo "{$this->name}:{$applicant}申請{$requestType}{$requestNumber}天被批准".PHP_EOL;
        } else {
            // 超過那些需求的話要給主管審
            if ($this->superior != null) {
                $this->superior->requestApplication($applicant, $requestType, $requestNumber);
            }
        }
    }
}