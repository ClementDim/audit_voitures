# Voitures

Voitures est un projet en Symfony qui permet de gérer une liste de véhicules. Il contient un espace d'administration sécurisé avec un système CRUD pour créer, consulter, mettre à jour et supprimer des véhicules. Ce projet est idéal pour les entreprises de location de voitures, les garages, ou toute autre entreprise ayant besoin de gérer un parc automobile.

## Table des matières

- [Fonctionnalités](#fonctionnalités)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [Contribution](#contribution)
- [Licence](#licence)

## Fonctionnalités

- Connexion sécurisée à un espace d'administration
- CRUD (Créer, Lire, Mettre à jour, Supprimer) pour les véhicules
- Interface intuitive pour gérer les véhicules

## Prérequis

- PHP 7.4 ou supérieur
- [Composer](https://getcomposer.org/)
- Base de données compatible avec Doctrine (MySQL, PostgreSQL, etc.)

## Installation

Clonez le dépôt GitHub :

```
git clone https://github.com/ClementDim/audit_voitures.git
```

Accédez au répertoire du projet :

```
cd audit_voitures
```

Installez les dépendances avec Composer :

```
composer install
```

## Configuration

1. Dupliquez le fichier `.env` et renommez-le en `.env.local`.

2. Modifiez les informations de connexion à la base de données dans le fichier `.env.local` :

```
DATABASE_URL="mysql://user:password@localhost/db_name"
```

3. Créez la base de données :

```
php bin/console doctrine:database:create
```

4. Appliquez les migrations pour créer les tables :

```
php bin/console doctrine:migrations:migrate
```

5. (Optionnel) Chargez des données de démo :

```
php bin/console doctrine:fixtures:load
```

## Utilisation

Lancez le serveur de développement intégré :

```
php -S localhost:8000 -t public/
```

Accédez à l'application dans votre navigateur à l'adresse [http://localhost:8000](http://localhost:8000).

Utilisez les identifiants suivants pour accéder à l'espace d'administration :

```
Email : admin@example.com
Mot de passe : admin
```

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir des issues ou à soumettre des pull requests si vous rencontrez des problèmes ou si vous avez des suggestions d'amélioration.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
