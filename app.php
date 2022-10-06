<?php
namespace App;


// Indiquer le chemin vers la dépendance autoload.
require __DIR__ . '/vendor/autoload.php';

use App\Animal\Fish;

// Here comes your code.

$myfish = new Fish('Catsou');

echo $myfish->noise();