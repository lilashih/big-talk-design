<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Composite\Composite\ConcreteCompany;
use Composite\Leaf\HRDepartment;
use Composite\Leaf\FinanceDepartment;

$root = new ConcreteCompany("北京總公司");
$root->add(new HRDepartment("總公司人力資源部"));
$root->add(new FinanceDepartment("總公司財務部"));

$comp = new ConcreteCompany("上海華東分公司");
$comp->add(new HRDepartment("華東分公司人力資源部"));
$comp->add(new FinanceDepartment("華東分公司財務部"));
$root->add($comp);

$comp1 = new ConcreteCompany("南京辦事處");
$comp1->add(new HRDepartment("南京辦事處人力資源部"));
$comp1->add(new FinanceDepartment("南京辦事處財務部"));
$comp->add($comp1);

$comp2 = new ConcreteCompany("杭州辦事處");
$comp2->add(new HRDepartment("杭州辦事處人力資源部"));
$comp2->add(new FinanceDepartment("杭州辦事處財務部"));
$comp->add($comp2);

$root->display(0);
$root->lineOfDuty();