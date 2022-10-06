<?php

namespace App;

abstract class Animal {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    protected abstract function getNoise() : string; // accessible seulement par les classes enfants

    public function noise() : string // accessible par tous y compris app.php
    {
        return $this->getNoise();   // permet de récupérer la function getNoise qui est protégée et de l'utiliser à
                                    // partir d'app.php
    }
}

