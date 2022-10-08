<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class ClownFish extends Animal implements CanSwim
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        return "{$this->getName()} does bloubloublou. \n";
    }
}