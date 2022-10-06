<?php

namespace App\Animal;

use App\Animal;

class Fish extends Animal
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

