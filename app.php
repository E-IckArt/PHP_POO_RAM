<?php

namespace App;

// Indiquer le chemin vers la dépendance autoload.
require __DIR__ . '/vendor/autoload.php';

# Indiquer les namespaces à utiliser.
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Whale;
use App\Animals\Zebra;
use App\Zoo;


$animals = [];

function createFishes(array &$animals, int $numberOfAnimals, string $animalName = "newFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Fish($animalName . $i + 1);
    }
}

function createBubbleFishes(array &$animals, int $numberOfAnimals, string $animalName = "newBubbleFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new BubbleFish($animalName . $i + 1);
    }
}

function createCatFishes(array &$animals, int $numberOfAnimals, string $animalName = "newCatFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new CatFish($animalName . $i + 1);
    }
}

function createClownFishes(array &$animals, int $numberOfAnimals, string $animalName = "newClownFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $animals[] = new ClownFish($animalName . $i + 1);
    }
}

function createElephants(array &$animals, int $numberOfAnimals, string $animalName = "newElephant"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Elephant($animalName . $i + 1);
    }
}

function createZebras(array &$animals, int $numberOfAnimals, string $animalName = "newZebra"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Zebra($animalName . $i + 1);
    }
}

function createParrots(array &$animals, int $numberOfAnimals, string $animalName = "newParrot"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Parrot($animalName . $i + 1);
    }
}

function createDoves(array &$animals, int $numberOfAnimals, string $animalName = "newDove"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Dove($animalName . $i + 1);
    }
}

function createWhales(array &$animals, int $numberOfAnimals, string $animalName = "newWhale"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {
        $animals[] = new Whale($animalName . $i + 1);
    }
}

createFishes($animals, 5, 'Polochon ');
createBubbleFishes($animals, 4, 'Boobaaaaa ');
createCatFishes($animals, 3, 'Catxou ');
createClownFishes($animals,1, 'Nemo ');
createElephants($animals,2, 'Doobow ');
createZebras($animals,1, 'Zaboo');
createParrots($animals,10, 'Coco ');
createDoves($animals,2, 'Plum ');
createWhales($animals, 2, 'MobyDick');


foreach ($animals as $animal) {
    try {
        Zoo::addAnimal($animal);
    } catch (\Exception $e) {
        echo $e;
    }
}

Zoo::visitZoo();

