<?php

namespace App\Animals;

use App\Animal;

class CatFish extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        return 'The '. $this->getName(). ' does bloubloublou';
    }
}