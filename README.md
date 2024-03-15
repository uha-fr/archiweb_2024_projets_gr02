# Manger

Bienvenue sur le projet **Manger**, un système de gestion de recettes et de suivi calorique.
Ce projet vous permet de suivre ce que vous mangez avec les calories au fil du temps et suggère des recettes à partir de trois ingrédients.
Conçu pour soutenir deux types d'utilisateurs - les utilisateurs standards et les nutritionnistes, avec des capacités administratives étendues pour une gestion complète.

## Prérequis

Avant de commencer, assurez-vous que vous avez les éléments suivants installés sur votre système :

- MySQL 8.0.18
- PHP 7.3.12
- WAMP Server (pour les utilisateurs Windows)

## Installation

Pour mettre en place et démarrer avec **Manger**, suivez ces étapes :

1. Clonez le dépôt GitHub dans votre **dossier www** de votre installation WAMP :
    ```bash
    git clone https://github.com/uha-fr/archiweb_2024_projets_gr02.git
    ```
2. Utilisez WAMP Server pour démarrer vos services Apache et MySQL.
3. Importez la base de données en utilisant MySQL :
    - Lancez le gestionnaire de base de données MySQL via WAMP.
    - Créez une nouvelle base de données nommée  **manger-db** .
    - Importez le fichier `.sql` fourni dans le dépôt pour structurer votre base de données.
4. Configurez votre fichier d'environnement :
    - Accédez à `archiweb_2024_projets_gr02-main/webapp/src/Model/` et ouvrez `Dadabase.php`.
    - Modifiez ce fichier pour correspondre à vos paramètres de base de données et à toute autre configuration nécessaire.
5. Pour accéder à l'application, ouvrez votre navigateur web et tapez l'URL suivante :
    ```url
    http://localhost/archiweb_2024_projets_gr02-main/webapp
    ```
7. Visualisez une démonstration de l'application via le dossier `/video` inclus dans le dépôt pour comprendre son fonctionnement.

## Utilisation

Manger est prêt à l'emploi une fois l'installation terminée.
Les nutritionnistes peuvent créer des recettes et modifier les plans de repas,
tandis que les utilisateurs standards peuvent suivre leur consommation calorique et obtenir des suggestions de recettes basées sur trois ingrédients.
