# PHP POO 

## Programme de la formation

- POO
- Découvrir Composer
- MVC

## Tips pour progresser
- Eviter les équations ternaires trop compliquée (avec des conditions dans des conditions)
- Eviter l'utilisation des GUI (ex : git kraken, etc,....)

## What's Gist

Gist is an easy method to share snippets or excerpts of data with others. A gist can be a string of code, a bash script or some other small piece of data. These bits of information are hosted by GitHub as a repository.  

## Itération 3 - Répondre aux questions

### A quoi sert Composer ?

- Composer est un gestionnaire de paquets open source.  
- Il permet d'installer et de gérer des dépendances dans un projet PHP (ex: Drupal, Symfony; Twig). Il sert à automatiser le développement en PHP.
- Il gère mes mises à jour.  
- Il allège le poids du dépôt sur git à l'aide des fichiers composer.json et composer.lock.

- Il utilise des dépôt, ex: packagist (installé par défaut avec composer), sur lesquels on peut retrouver toutes les dépendances disponibles

### Trouver lui d’autre équivalent dans au moins 2 environnement différents.
- Node.js => npm
- Python => pip
- Ruby => bundler
- Java => Maven, Gradle 

### A quoi sert le fichier composer.json ?

- A stocker toutes les dépendances utilisées dans le projet pour les réinstaller automatiquement à chaque fork ou clone du projet, grâce à la commande :

 `composer install .json`.

### A quoi servent les caractères ^ et * du fichier .json ?

- * => Wildcard Version Range : You can specify a pattern with a * wildcard. 1.0.* is the equivalent of >=1.0 <1.1.

Example: 1.0.*

- Caret Version Range (^) => The ^ operator behaves very similarly to the Tilde Version Range (~), but it sticks closer to semantic versioning, and will always allow non-breaking updates. For example ^1.2.3 is equivalent to >=1.2.3 <2.0.0 as none of the releases until 2.0 should break backwards compatibility. For pre-1.0 versions it also acts with safety in mind and treats ^0.3 as >=0.3.0 <0.4.0 and ^0.0.3 as >=0.0.3 <0.0.4.

This is the recommended operator for maximum interoperability when writing library code.

Example: ^1.2.3
### A quoi sert le fichier composer.lock ? Quelle est la différence avec le fichier .json ?

- Le fichier composer.json contient toutes les dépendances nécessaires au bon fonctionnement du projet.

- Le fichier composer.lock contient la version précise de chaque dépendance pour que tous les développeurs travaillent bien sur un projet avec la même version.

## Paradigme de programmation

Ils sont en constante évolution.
Ceux sont un peu des règles du jeu pour programmer : la manière dont les instrucutions seront définies.

PHP est un language de programmation interprété multiparadigmes :
- impératif
- fonctionnel
- procédural
- orienté objet
- réflexif

## SEMVER : versionning semantic

voir [versionning semantic](https://semver.org/spec/v2.0.0.html)

Exemple : `v1.2.3`

- 1 = Version majeure : la mise à jour dans le projet peut casser le code.
- 2 = Version mineure : ajout de feature ou modification mineure. La mise à jour dans le projet peut altérer le fonctionnement du code.
- 3 = Version patch : bugfix. La mise à jour dans le projet ne change pa notre code.

**Dans les languages orientés objets les types n'existent pas : tout est une classe.**

## Principes de POO

1. Abstraction
2. Encapsulation
3. Héritage
4. Polymorphisme

### A propos de l'encapsulation : 

On a tendance à mettre tous les attributs d'une classe en **private** et les accesseurs en **public** alors que ce n'est pas nécessaire si on peut modifier l'attribut sans condition :

```
Class Person {

    private $name;

    public getName() {}
    public setName() {}

}
```
L'utilisation des accesseurs n'est utile que s'il y a une condition à la modification : 

```
Class Person {
    
    private $name;
    
    public getName() {}
    public setName() {
        if() {

        } else {

        }
    }
}
```

Sinon autant mettre les attributs en public et se passer de getters et setters.

```
Class Person {
    
    public $name;

} 
```
Eventuellement on peut mettre les attributs en **protected** pour qu'ils ne puissent être modifier qu'à l'intérieur d'une classe du même spacename :

```
Class Person {
    
    protected $name;
    
    public getName() {}
    public setName() {
        if() {

        } else {

        }
    }
} 
```
#### Attention !
Un ORM peut obliger à passer par des getters et des setters. 
### A propos des classes abstraites : 

Une classe abstraite ne peut pas être instanciée.
Elle doit être héritée par une autre classe à partir de laquelle on pourra instancier des objets.

### A propos des interfaces :

Elles comportent seulement les attributs et les signatures de méthode.

Les classes qui utilisent l'interface devront obligatoirement contenir au minimum les mêmes attributs et les mêmes méthodes.

### instanceof

L'opérateur **instanceof** permet de tester si un objet possède, dans sa chaîne de prototype, la propriété prototype d'un certain constructeur.

` objet instanceof constructeur `

Exemple : 

```
if ($animal intanceOf (Cat)) {
    
    //code

}
```

