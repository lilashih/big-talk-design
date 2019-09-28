<?php

namespace CoR\ConcreteHandler;

use CoR\Handler\Manager;

class GeneralManager extends Manager
{
    public function requestApplication($applicant, $requestType, $requestNumber): void
    {
        if ($requestType == "請假") {
            echo "{$this->name}:{$applicant}申請{$requestType}{$requestNumber}天被批准".PHP_EOL;

        } else if ($requestType == "加薪" && $requestNumber <= 500) {
            echo "{$this->name}:{$applicant}申請{$requestType}\${$requestNumber}被批准".PHP_EOL;

        } else if ($requestType == "加薪" && $requestNumber > 500) {
            echo "{$this->name}:{$applicant}申請{$requestType}\${$requestNumber}再說吧".PHP_EOL;

        }
    }
}