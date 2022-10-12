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


// Créer une boucle pour créer 5 Fishes
function create_Fishes($numberOfFishes, string $animalName = 'Fish') :void
{
    for($i=0; $i < $numberOfFishes; $i++) {

        $fishes[] = new Fish($animalName. $i+1);
        echo($fishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 3 BubbleFishes
function create_bubbleFishes($numberOfBubbleFishes, string $animalName = 'BubbleFish') : void {
    for($i=0; $i < $numberOfBubbleFishes; $i++) {

        $bubbleFishes[] = new BubbleFish($animalName. $i+1);
        echo($bubbleFishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 2 CatFishes
function create_CatFishes($numberOfCatFishes,string $animalName = 'CatFish') : void {
    for($i=0; $i < $numberOfCatFishes; $i++) {

        $catFishes[] = new CatFish($animalName. $i+1);
        echo($catFishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 1 ClownFish
function create_ClownFishes($numberOfClownFishes, string $animalName = 'ClownFish ') : void {
    for ($i = 0; $i < $numberOfClownFishes; $i++) {

        $clownFishes[] = new ClownFish( $animalName. $i+1);
        echo($clownFishes[$i]->noise()).PHP_EOL;

    }
}

// Créer une boucle pour créer 2 Elephants
function create_Elephants($numberOfElephants, string $animalName = 'Elephant') : void {
    for($i=0; $i < $numberOfElephants; $i++) {

        $elephants[] = new Elephant($animalName . $i + 1);
        echo($elephants[$i]->noise()).PHP_EOL;

    }
}


// Créer une boucle pour créer 1 Zebra
function create_Zebras($numberOfZebras, string $animalName = 'Zebra') : void {
    for($i=0; $i < $numberOfZebras; $i++) {

        $zebras[] = new Zebra($animalName . $i + 1);
        echo ($zebras[$i]->noise()) . PHP_EOL;
    }
}

// Créer une boucle pour créer 10 Parrots
function create_Parrots($numberOfParrots, string $animalName = 'Parrot ' ) : void {
    for($i=0; $i < $numberOfParrots; $i++) {

        $parrots[] = new Parrot($animalName . $i + 1);
        echo ($parrots[$i]->noise()) . PHP_EOL;
    }
}

// Créer une boucle pour créer 2 Doves
function create_Doves($numberOfDoves, string $animalName = 'Dove ') : void {
    for($i=0; $i < $numberOfDoves; $i++) {

        $doves[] = new Dove($animalName . $i + 1);
        echo($doves[$i]->noise()). PHP_EOL;
    }
}

// Créer une boucle pour créer 2 Whales
function create_Whales($numberOfWhales, string $animalName = 'Whale') : void {
    for($i=0; $i < $numberOfWhales; $i++) {

        $whales[] = new Whale($animalName . $i + 1);
        echo($whales[$i]->noise()). PHP_EOL;
    }
}

create_Fishes(5, 'Polochon ');
create_bubbleFishes(4, 'Boobaaaaa ');
create_CatFishes(3, 'Catxou ');
create_ClownFishes(1, 'Nemo ');
create_Elephants(2, 'Doobow ');
create_Zebras(1, 'Zaboo ');
create_Parrots(10, 'Coco ');
create_Doves(2, 'Plum ');
create_Whales(2, 'MobyDick ' );


# TODO - Complete these lines to get a complete array.
//$myZoo = array_push($animals, create_Fishes(5));
//
//print_r($myZoo);
