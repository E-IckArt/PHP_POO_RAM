<?php

namespace App;
Abstract Class Animal {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    protected function getNoise() : string {
        return "Faites du bruit Annecy !!!";
    }





}

