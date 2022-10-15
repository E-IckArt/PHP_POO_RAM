<?php

namespace App;

use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

use Exception;

class Zoo
{
    /**
     * @var Enclosure|null
     */
    private static ?Enclosure $aquarium = null;

    /**
     * @var Enclosure|null
     */
    private static ?Enclosure $aviary = null;

    /**
     * @var Enclosure|null
     */
    private static ?Enclosure $fence = null;

    /**
     * @return Enclosure
     */
    public static function getAquarium(): Enclosure
    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure
     */
    public static function getAviary(): Enclosure
    {
        return self::$aviary;
    }

    /**
     * @return Enclosure
     */
    public static function getFence(): Enclosure
    {
        return self::$fence;
    }

    /**
     * @param Animal $animal
     * @return void
     * @throws Exception
     */
    public static function addAnimal(Animal $animal)
    {
        switch ($animal) {
            case $animal instanceof CanFly:
                if (self::$aviary == null) {
                    self::$aviary = new Enclosure();
                }
                self::$aviary->addAnimal($animal);
                break;
            case $animal instanceof CanWalk:
                if (self::$fence == null) {
                    self::$fence = new Enclosure();
                }
                self::$fence->addAnimal($animal);
                break;
            case $animal instanceof CanSwim:
                if (self::$aquarium == null) {
                    self::$aquarium= new Enclosure();
                }
                self::$aquarium->addAnimal($animal);
                break;
            default:
                throw new Exception("We are not able to store this animal");
        }
    }

    /**
     * @return void
     */
    public static function visitZoo() {
        if(sizeof(self::getAviary()) != 0){
            echo "Available animal in Aviary : " . PHP_EOL;
            echo self::getAviary().PHP_EOL;
        }

        if(count(self::getFence()) != 0){
            echo "Available animal in Fence : " . PHP_EOL;
            echo self::getFence().PHP_EOL;
        }

        if(sizeof(self::getAquarium()) != 0){
            echo "Available animal in Aquarium : " . PHP_EOL;
            echo self::getAquarium().PHP_EOL;
        }

    }
}