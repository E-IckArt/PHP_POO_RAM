<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        return "{$this->getName()} does hiiiii \n";
    }
}