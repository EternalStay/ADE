# Projet - Analyse et Décision en Entreprise (ADE)

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) [![forthebadge](https://forthebadge.com/images/badges/made-with-javascript.svg)](https://forthebadge.com)

UPJV - Master 1 MIAGE : UE Analyse et Décision en Entreprise (ADE)

## Parties

Le projet était composé de deux parties :  

- Partie 1 : Résolution d'un modèle linéaire
- Partie 2 : Étudier un problème lié à la "gestion de projets"

## Pour commencer

Afin de lancer le programme, il est demandé de suivre les instructions ci-dessous.

### Pré-requis

Ce qu'il est requis pour lancer le projet : 

- Un serveur web pour lancer le fichier ``.php`` (via WAMP ou LAMP par exemple)
- Mettre dans ``www`` le dossier contenant les fichiers du projet
- Activer le javascript sur la page web du projet

### Lancement du programme

Les étapes pour ouvrir le programme : 

- _Étape 1_: Démarrer le serveur web (se fait par défaut selon sa configuration)
- _Étape 2_: Ouvrir un navigateur et accéder à ``localhost/`` ou ``http://127.0.0.1/``
- _Étape 3_: Accéder à l'archive du projet et ouvrir ``index.php``

## Démarrage

Une fois la page ouverte, il est possible de naviguer entre les deux parties du projet.

### Partie 1 : Résolution d'un modèle linéaire

La première partie concerne la résolution d'un modèle linéaire donné sous sa forme canonique (PLC), pour ensuite construire différentes courbes sur l'évolution du temps d'exécution de l'algorithme en fonction de la taille des données. Les étapes suivantes ont été effectuées : 

- Création d'un certain nombre de Programmes Linéaires sous forme Canonique (PLC) avec un nombre de contraintes (m) et un nombre de variables de décision (n) différents.
- Création des Programmes Linéaires sous forme Standard (PLS) liés à ces PLC.
- Résolution des modèles linéaires grâce à l'algorithme du pivot.
- Calcul du temps d'exécution pour chaque résolution d'un modèle linéaire.
- Création d'une courbe pour chaque variation du nombre de contraintes.

### Partie 2 : Étudier un problème lié à la "gestion de projet"

La deuxième partie concerne la représentation d'un problème de plannification par application de la méthode PERT. En utilisant l'exemple du cours, nous avons effectué les étapes suivantes : 

- Construction du graphe initial.
- Construction du graphe après le calcul des dates au plus tôt.
- Construction du graphe après le calcul des dates au plus tard.
- Affichage du chemin critique sur le graphe.
- Calcul des dates décrites (marges totales, tâches critiques, chemins critiques, sous-graphe critique, marges libres)

## Fabriqué avec

Les logiciels/ressources utilisés pour développer ce projet sont les suivants : 

* [Plotly](https://plot.ly/javascript/) - Librairie Javascript de construction de graphes
* [ejDiagram](https://help.syncfusion.com/api/js/ejdiagram) - Librairie Javascript de construction de diagrammes
* [Font Awesome](https://fontawesome.com/) - Outil d'icônes

## Versions

**Dernière version stable :** 1.0

**Dernière version :** 1.0

Liste des versions : [Cliquer pour afficher](https://github.com/EternalStay/ADE/tags)

## Auteurs
* **Rose Maxime** _alias_ [@maximerose](https://github.com/maximerose)
* **Volff Lorris** _alias_ [@EternalStay](https://github.com/EternalStay)

Lisez la liste des [contributeurs](https://github.com/EternalStay/ADE/contributors) pour voir qui a aidé au projet !
