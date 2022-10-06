<?php
namespace App;


// Indiquer le chemin vers la dépendance autoload.
require __DIR__ . '/vendor/autoload.php';

use App\Animals\Fish;

// Here comes your code.

$myfish = new Fish('Catsou');

echo $myfish->noise();


// TODO - Créer un tableau contenant les animaux et itérer dessus

$animals = array(

)