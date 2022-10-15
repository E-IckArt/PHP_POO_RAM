<?php

namespace App;

abstract class Animal {

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
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

    /**
     * @return string
     */
    protected abstract function getNoise() : string; // accessible seulement par les classes enfants

    /**
     * @return string
     */
    public function noise() : string // accessible par tous y compris app.php
    {
        return $this->getNoise();   // permet de récupérer la function getNoise qui est protégée et de l'utiliser à
                                    // partir d'app.php
    }
}

