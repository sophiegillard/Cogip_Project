## Welcome to our Cogip project!

![HTML5](https://img.shields.io/badge/HTML5-blue)
![CSS3](https://img.shields.io/badge/CSS3-red)
![JavaScript](https://img.shields.io/badge/JavaScript-yellow)
![PHP](https://img.shields.io/badge/PHP-mallow)
![SQL](https://img.shields.io/badge/SQL-pink)
![TWIG](https://img.shields.io/badge/TWIG-green)

# COGIP

### Description
Le projet a été réalisé dans le cadre d’une formation de développement web. 
Il s’agit d’un site fictif, d’un exercice pratique.

Cogip est un site web destiné à la gestion des factures, des clients et leurs contacts. 
Une première interface permet d’afficher les informations encodées par l’entreprise. 
Dans cette première l’on retrouve: 
- Une page HOME : celle-ci reprend les 5 dernières factures, fournisseurs et contacts de l’entreprise. 
- Une page INVOICES : celle-ci reprend toutes les factures de l’entreprise. Il est possible de filtrer les données selon certains critères et de rechercher les factures à l’aide d’une barre de recherche. 
- Une page COMPANIES :  même fonctionnalités que la page invoice. De plus il est possible d’accéder à une page supplémentaire, soit « Show Company » afin d’avoir plus d’informations sur l’entreprise. Pour se faire il suffit de cliquer sur le nom de l’entreprise dans le tableau. 
- Une page CONTACTS :  même fonctionnalités que la page INVOICE. De plus il est possible d’accéder à une page supplémentaire, soit « Show Contact » afin d’avoir plus d’informations sur les personnes de contact. Pour se faire il suffit de cliquer sur le nom de l’entreprise dans le tableau. 

La deuxième interface est celle du dashboard. Lorsqu’un utilisateur se connecte, celui-ci accède au dashboard où il est possible d’insérer de nouvelles données ou de les modifier.

### A venir
- Système de login
- Mise en place d'une pagination
- Validation cotée client
- Gestion des permissions utilisateur
- Validation cotée backend
- Gestion des fichiers dans les formulaires

### Comment lancer le projet en local
- PRÉREQUIS
    - Installer Php
    - Installer MySQL
    - Installer Phpmyadmin
    - Installer Composer

- Installer composer dans le projet avec la commande 'composer install' dans le terminal.
- Vérifier que toute les dépendances ont été installées, dans le terminal avec la commande 'composer fund' et vérifier que 'Bramus', 'Symphony', 'Filp' et 'Twig' soit présent.
- Télécharger la base de donnée et l'importer sur phpmyadmin.
- Enregistrer vos identifiants phpmyadmin dans le dossier 'COGIP_PROJECT/Database/dbConnection.php' pour connecter votre base de donnée au projet.
- Enfin dans le terminal lancer le serveur php avec la commande : 'php -S localhost:8000 -t public'. 
- Écriver 'localhost:8000' dans votre navigateur et le projet est prêt !


### Team :
- [Sophie Gillard](https://github.com/sophiegillard)
- [Julien Scourneau](https://github.com/JulienScourneau)
- [Titouan Moussiaux](https://github.com/Moustito)

Lien : [Consignes Becode](https://github.com/becodeorg/CRL-Wilson-1/tree/master/1.TRAIL/3.The-Mountain/COGIP)

Lien vers l'application : [COGIP](https://bc-cogip-project.000webhostapp.com)

### Travail Personnel: 
- réalisation des fonctions JavaScript pour l'implémentation de la barre de recherche et du filtre dans les tableaux.
- Réalisation du design des tableaux
- Implémentation des données via Twig
- Réalisation de certaines pages utilisation Twig
