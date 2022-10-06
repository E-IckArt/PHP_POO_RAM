# Installer composer dans un projet

## Vérifier la présence et la version de php et de curl

- `php -v`
- `curl --version`

## Installer composer.phar dans le projet (si Composer n'est pas installer sur l'ordi)

- Utiliser le fichier .phar du site composer ou 

- taper dans le terminal :

`curl -sS <lien> | php`

## Créer un fichier composer.json

`php composer.phar init`

ou

`composer init` (si composer installé sur l'ordi)

Renseigner les  différents champs.   
 
Penser à activer **psr-4** (l'autoloading). Cette dépendance sera installée dans le dossier vendor du projet.  

## Dans le fichier composer.json :

Au niveau de la dépendance psr-4 : remplacer :
```
{
    "autoload": {
        "psr-4": {"nom\\": "src/"}
    }
}
```

par :

```
{
    "autoload": {
        "psr-4": {"App\\": "src/"}
    }
}
```

pour placer le point d'entrée en dehors du dossier **src**.

## Installer composer.phar dans le projet

Si composer est installé sur l'ordi : 

`composer install`

Sinon : 

`php composer.phar install`


