<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        return "{$this->getName()} Rou Rouuuuu. \n";
    }
}