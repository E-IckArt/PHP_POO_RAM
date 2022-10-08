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

$animals = array();

$bubbleFishes = array();
$catfishes = array();
$clownFishes = array();
$doves = array();
$elephants = array();
$fishes = array();
$parrots = array();
$whales = array();
$zebras = array();



function createAnimals(array &$animals, $animalSpecies, $numberOfAnimals, $animalName = "newAnimal") : void
{
    // Instancier les nouveaux animaux
    for($i=0; $i < $numberOfAnimals; $i++) {

        $animalSpecies[] = new Fish($animalName. $i+1);
        echo($animalSpecies[$i]->noise()).PHP_EOL;
    }
    // Les ajouter dans le tableau de l'espèce
    foreach ($animalSpecies as $animal) {
        $animals[] = $animal;
    }

}



# TODO - Complete or delete this line and keep previous ones.
echo "test - start ".PHP_EOL;

createAnimals($animals, $fishes,5, 'Polochon ');
createAnimals($animals, $bubbleFishes, 4, 'Boobaaaaa ');
createAnimals($animals, $catfishes, 3, 'Catxou ');
createAnimals($animals, $clownFishes, 1,'Nemo ');
createAnimals($animals, $elephants, 2, 'Doobow ');
createAnimals($animals, $zebras, 1, 'Zaboo');
createAnimals($animals, $parrots, 10, 'Coco ');
createAnimals($animals, $doves, 2, 'Plum ');
createAnimals($animals, $whales, 2, 'MobyDick');

echo "test - end ".PHP_EOL;


