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

// TODO - Créer un tableau contenant les animaux et itérer dessus


$bubbleFishes = array();
$catfishes = array();
$clownFishes = array();
$doves = array();
$elephants = array();
$fishes = array();
$parrots = array();
$whales = array();
$zebras = array();

$animals = array($bubbleFishes, $catfishes, $clownFishes, $doves, $elephants, $fishes, $parrots, $whales, $zebras);


function createFishes(array &$animals, array $fishes, int $numberOfAnimals, string $animalName = "newFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $fishes[] = new Fish($animalName . $i + 1);
        echo ($fishes[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($fishes as $fish) {
        $animals[] = $fish;
    }
}

function createBubbleFishes(array &$animals, array $bubbleFishes, int $numberOfAnimals, string $animalName = "newBubbleFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $bubbleFishes[] = new BubbleFish($animalName . $i + 1);
        echo ($bubbleFishes[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($bubbleFishes as $bubbleFish) {
        $animals[] = $bubbleFish;
    }
}

function createCatFishes(array &$animals, array $catFishes, int $numberOfAnimals, string $animalName = "newCatFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $catFishes[] = new CatFish($animalName . $i + 1);
        echo ($catFishes[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($catFishes as $catFish) {
        $animals[] = $catFish;
    }
}

function createClownFishes(array &$animals, array $clownFishes, int $numberOfAnimals, string $animalName = "newClownFish"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $clownFishes[] = new ClownFish($animalName . $i + 1);
        echo ($clownFishes[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($clownFishes as $clownFish) {
        $animals[] = $clownFish;
    }
}

function createElephants(array &$animals, array $elephants, int $numberOfAnimals, string $animalName = "newElephant"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $elephants[] = new Elephant($animalName . $i + 1);
        echo ($elephants[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($elephants as $elephant) {
        $animals[] = $elephant;
    }
}

function createZebras(array &$animals, array $zebras, int $numberOfAnimals, string $animalName = "newZebra"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $zebras[] = new Zebra($animalName . $i + 1);
        echo ($zebras[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($zebras as $zebra) {
        $animals[] = $zebra;
    }
}

function createParrots(array &$animals, array $parrots, int $numberOfAnimals, string $animalName = "newParrot"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $parrots[] = new Parrot($animalName . $i + 1);
        echo ($parrots[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($parrots as $parrot) {
        $animals[] = $parrot;
    }
}

function createDoves(array &$animals, array $doves, int $numberOfAnimals, string $animalName = "newDove"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $doves[] = new Dove($animalName . $i + 1);
        echo ($doves[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($doves as $dove) {
        $animals[] = $dove;
    }
}

function createWhales(array &$animals, array $whales, int $numberOfAnimals, string $animalName = "newWhale"): void
{
    // Instancier les nouveaux animaux
    for ($i = 0; $i < $numberOfAnimals; $i++) {

        $whales[] = new Whale($animalName . $i + 1);
        echo ($whales[$i]->noise()) . PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($whales as $whale) {
        $animals[] = $whale;
    }
}


# TODO - Complete or delete this line and keep previous ones (see scratch_app.php).

createFishes($animals, $fishes, 5, 'Polochon ');
createBubbleFishes($animals, $bubbleFishes, 4, 'Boobaaaaa ');
createCatFishes($animals, $catfishes, 3, 'Catxou ');
createClownFishes($animals, $clownFishes, 1, 'Nemo ');
createElephants($animals, $elephants, 2, 'Doobow ');
createZebras($animals, $zebras, 1, 'Zaboo');
createParrots($animals, $parrots, 10, 'Coco ');
createDoves($animals, $doves, 2, 'Plum ');
createWhales($animals, $whales, 2, 'MobyDick');

// var_dump();
print_r($animals);
