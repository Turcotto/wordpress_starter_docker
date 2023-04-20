# wordpress_starter_docker

A starter for any wordpress project that I use

## Description

Ce dépot de code contient le theme du site web lamareedesmots.org

## Installation

Pour débuter le développement local, démarrer le container docker avec la commande suivante :

```bash
docker-compose up -d
```

Connectez-vous au url suivant : localhost:8000 et terminez la configuration wordpress.

### Mise en production

TODO

### Retrofit

Pour se mettre à jour avec la production.

1. Faire une exportation de la BD du site web de prod.
2. Transférer les fichiers sous le dossier uploads de la prod
3. Exécuter le script change_url.sql en s'assurant que le url de prod et le url developpement soit les bons.
4. Modifier les valeurs suivantes dans le docker-compose.yml, si nécessaire :
    1. WORDPRESS_DB_NAME
    2. WORDPRESS_TABLE_PREFIX

## Base de données

Le container de docker contient l'outil phpmyadmin pour administer la base de données. Disponible au URL : localhost
8000

## Développement

Pour débuter le développement :

1. Modifier le nom du dossier à la racine du dossier themes
2. Modifier le nom du themes dans le fichier style.css

### Librairies utiles

#### Tailwind CSS

Documentation : https://tailwindcss.com/docs/installation

Lors du développement, démarrer tailwind à la racine du dossier /assets avec la commande :

```bash
npx tailwindcss -i ./css/input.css -o ./css/output.css --watch
```

#### Génération de favicon

Site web : https://realfavicongenerator.net
