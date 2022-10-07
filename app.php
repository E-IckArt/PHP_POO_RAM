<?php
namespace App;


// Indiquer le chemin vers la dépendance autoload.
require __DIR__ . '/vendor/autoload.php';

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

// Créer une boucle pour créer 5 Fishes

for($i=0; $i < 5; $i++) {

    $fishes[] = new Fish('Fish '. $i+1);
    echo($fishes[$i]->noise());

}

// Créer une boucle pour créer 3 BubbleFishes

for($i=0; $i < 4; $i++) {

    $bubbleFishes[] = new BubbleFish('BubbleFish '. $i+1);
    echo($bubbleFishes[$i]->noise());

}

// Créer une boucle pour créer 2 CatFishes

for($i=0; $i < 3; $i++) {

    $catFishes[] = new CatFish('CatFish '. $i+1);
    echo($catFishes[$i]->noise());

}

// Créer une boucle pour créer 1 ClownFish

for($i=0; $i < 1; $i++) {

    $clownFishes[] = new ClownFish('ClownFish '. $i+1);
    echo($clownFishes[$i]->noise());

}

// Créer une boucle pour créer 2 Elephants

for($i=0; $i < 2; $i++) {

    $elephants[] = new Elephant('Elephant '. $i+1);
    echo($elephants[$i]->noise());

}

// Créer une boucle pour créer 1 Zebra

for($i=0; $i < 1; $i++) {

    $zebras[] = new Zebra('Zebra '. $i+1);
    echo($zebras[$i]->noise());

}

// Créer une boucle pour créer 10 Parrots

for($i=0; $i < 11; $i++) {

    $parrots[] = new Parrot('Parrot '. $i+1);
    echo($parrots[$i]->noise());

}

// Créer une boucle pour créer 2 Doves

for($i=0; $i < 2; $i++) {

    $doves[] = new Dove('Dove '. $i+1);
    echo($doves[$i]->noise());

}

$animals[] .= $fishes;
$animals[] .= $bubbleFishes;
$animals[] .= $catFishes;
$animals[] .= $clownFishes;
$animals[] .= $elephants;
$animals[] .= $zebras;
$animals[] .= $parrots;
$animals[] .= $doves;

print_r($animals[]);


