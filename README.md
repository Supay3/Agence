# Agence
Un site d'agence immobilière fait en formation avec Grafikart, il avait été codé en Symfony 4 et je l'ai adapté en Symfony 5 durant le suivi de la formation.

## Installation
Si vous souhaitez tester ce projet il vous faudra ```composer``` ainsi que ```npm```

>Une fois cloné, il faut se rendre dans le répertoire du projet et lancer les commandes :
```
$ composer install
$ npm install
```
Puis il vous faudra modifier le fichier ```.env``` en configurant votre propre base de données et lancer les commandes :
```
$ php bin/console doctrine:database:create
$ php bin/console make:migration
$ php bin/console doctrine:migration:migrate
```
Enfin il vous faudra créer un administrateur si vous voulez pouvoir ajouter des biens immobiliers etc... ou alors lancer la commande :
```
$ php bin/console doctrine:fixtures:load
```
### Frameworks, Api, Librairies et Bundles et utilisés
#### Frameworks
- ```Symfony```
- ```Bootstrap```
- ```jQuery```
#### Api
- ```Algolia Places```
#### Librairies
- ```Select2 (sur jQuery)```
- ```Leaflet```
#### Bundles
- ```KnpPaginatorBundle```
- ```VichUploaderBundle```
- ```LiipImagineBundle```

### Auteurs
- Grafikart (sur le site <a href="https://www.grafikart.fr">Grafikart.fr</a>)
- <a href="https://github.com/Supay3/">Elzéar Brouillet</a>
