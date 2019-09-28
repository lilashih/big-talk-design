<?php

namespace Memento\Originator;

use Memento\Memento\RoleStateMemento;

class GameRole
{
    private $vit;
    private $atk;
    private $def;

    public function stateDisplay()
    {
        echo "角色當前狀態: ".PHP_EOL;
        echo "體力: {$this->vit}".PHP_EOL;
        echo "攻擊力: {$this->atk}".PHP_EOL;
        echo "防禦力: {$this->def}".PHP_EOL.PHP_EOL;
    }

    public function getInitState()
    {
        $this->vit = 100;
        $this->atk = 100;
        $this->def = 100;
    }

    public function fight()
    {
        $this->vit = 0;
        $this->atk = 0;
        $this->def = 0;
    }

    // 新增到Memento
    public function saveState()
    {
        return new RoleStateMemento($this->vit, $this->atk, $this->def);
    }

    // 從Memento恢復狀態
    public function recoveryState(RoleStateMemento $memento)
    {
        $this->vit = $memento->vit;
        $this->atk = $memento->atk;
        $this->def = $memento->def;
    }
}