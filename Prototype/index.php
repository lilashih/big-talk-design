<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Prototype\Resume\Resume;
use Prototype\Resume\ResumeNoClone;

echo "淺拷貝".PHP_EOL;
$resume1 = new ResumeNoClone("大鳥");
$resume1->setPersonalInfo("男", "29");
$resume1->setWorkExperience("1992~1995", "XX公司");

$resume2 = clone $resume1;
echo $resume1->display();
echo $resume2->display();

echo "修改resume1裡的物件時resume2也會被改到。".PHP_EOL;
$resume1->setWorkExperience("1992~1995", "AA公司");
echo $resume1->display();
echo $resume2->display();


echo PHP_EOL."深拷貝。".PHP_EOL;
$resume3 = new Resume("大鳥");
$resume3->setPersonalInfo("男", "29");
$resume3->setWorkExperience("1992~1995", "XX公司");

$resume4 = clone $resume3;
echo $resume3->display();
echo $resume4->display();

echo "修改resume1裡的物件時resume2不會被改到。".PHP_EOL;
$resume3->setWorkExperience("1992~1995", "AA公司");
echo $resume3->display();
echo $resume4->display();