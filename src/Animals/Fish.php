<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class Fish extends Animal
{


    public function __construct(string $name = "Polochon")
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        $fishNoise = "bloubloublou";
        return "{$this->getName()} does {$fishNoise}";
    }

}

