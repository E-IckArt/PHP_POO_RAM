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
use App\Animals\Zebra;

// Créer une boucle pour créer 5 Fishes
function create_Fishes($numberOfFishes) :void
{
    for($i=0; $i < $numberOfFishes; $i++) {

        $fishes[] = new Fish('Fish '. $i+1);
        echo($fishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 3 BubbleFishes
function create_bubbleFishes($numberOfBubbleFishes) : void {
    for($i=0; $i < $numberOfBubbleFishes; $i++) {

        $bubbleFishes[] = new BubbleFish('BubbleFish '. $i+1);
        echo($bubbleFishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 2 CatFishes
function create_CatFishes($numberOfCatFishes) : void {
    for($i=0; $i < $numberOfCatFishes; $i++) {

        $catFishes[] = new CatFish('CatFish ' . $i + 1);
        echo($catFishes[$i]->noise()).PHP_EOL;

    }
}


// Créer une boucle pour créer 1 ClownFish
function create_ClownFishes($numberOfClownFishes) : void {
    for ($i = 0; $i < $numberOfClownFishes; $i++) {

        $clownFishes[] = new ClownFish('ClownFish ' . $i + 1);
        echo($clownFishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 2 Elephants
function create_Elephant($numberOfElephants) : void {
    for($i=0; $i < 2; $i++) {

        $elephants[] = new Elephant('Elephant ' . $i + 1);
        echo($elephants[$i]->noise()).PHP_EOL;

    }
}


// Créer une boucle pour créer 1 Zebra

for($i=0; $i < 1; $i++) {

    $zebras[] = new Zebra('Zebra '. $i+1);
    echo($zebras[$i]->noise()).PHP_EOL;

}

// Créer une boucle pour créer 10 Parrots

for($i=0; $i < 11; $i++) {

    $parrots[] = new Parrot('Parrot '. $i+1);
    echo($parrots[$i]->noise()).PHP_EOL;

}

// Créer une boucle pour créer 2 Doves

for($i=0; $i < 2; $i++) {

    $doves[] = new Dove('Dove '. $i+1);
    echo($doves[$i]->noise());

}

create_Fishes(5);
create_bubbleFishes(4);
create_CatFishes(3);
create_ClownFishes(1);


# TODO - Complete these lines to get a complete array.
//$myZoo = array_push($animals, create_Fishes(5));
//
//print_r($myZoo);
