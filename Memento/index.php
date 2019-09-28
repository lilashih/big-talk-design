<?php

require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../autoload.php";

use Memento\Originator\GameRole;
use Memento\Caretaker\RoleStateCaretaker;

$role = new GameRole();
$role->getInitState();
$role->stateDisplay();

// 保存進度
$caretaker = new RoleStateCaretaker();
$caretaker->memento = $role->saveState();

$role->fight();
$role->stateDisplay();

// 恢復之前狀態
$role->recoveryState($caretaker->memento);
$role->stateDisplay();