<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class BubbleFish extends Animal implements CanSwim
{
    protected function getNoise(): string
    {
        return "{$this->getName()} does bloubloublou.";
    }
}
