# Interface de gestion des clients
## Contexte de la mission
La société Classic Models - notre client préféré après tante Ursule - souhaite développer une interface de gestion de leurs clients.
Les priorités sont les suivantes :
 - Pouvoir rapidement rechercher un client dans la base à partir de son nom et accéder à ses informations
 - Modifier en 3 clics les données d'un client particulier

## Choix techniques
Le client insiste sur la rapidité et la clarté de l'interface de gestion. On va donc partir sur une interface
orientée application en utilisant des requêtes ***Ajax*** pour éviter de recharger la page sans arrêt.

*Rappel* : une requête Ajax n'est rien d'autre qu'une ***requête HTTP*** envoyée depuis le client au serveur en ***JavaScript*** !

## Conseils
### Découper le travail en plusieurs étapes
Lorsque vous vous attaquez au développement d'une application, il est important de procéder par petites étapes successives.
Dans le cas présent, on peut imaginer découper le travail en ***3 grandes étapes*** :

 1. **Recherche d'un client** à partir de son nom et affichage des résultats sous forme de liste
 2. **Afficher les informations détaillées d'un client** au clic sur un résultat de recherche
 3. **Modifier les données d'un client** à partir d'un formulaire

### Organiser son code
Organisez au maximum votre code !

#### En JavaScript
On peut isoler dans le fichier ***main.js*** le code principal par exemple.
Les fonctions peuvent être réparties dans plusieurs fichiers en fonction de leur nature :
- fonctions gestionnaires d'événements: fichier ***events.js***
- fonctions callback Ajax : fichier ***ajax.js***
- autres fonctions relatives au projet : ***customers.js***

#### En PHP
On pourra également en PHP créer des fonctions pour factoriser le code et répartir ces fonctions de manière pertinente et logique.

- fonctions utilitaires liées à la gestion de la base de données et à l'exécution de requêtes : fichier ***database_utilities.php***
- fonctions spécifiques à l'exécution de requêtes SQL liées aux clients : fichier ***customer_model.php***

#### Comme d'habitude on prendra soin de séparer les différents langages :
- HTML / PHP dans des fichiers de templates .phtml
- CSS dans un fichier de style
- PHP / SQL dans des fichiers .php
- JavaScript : dans des fichiers .js

## Mockups

![Mockup 1](resources/mockups/mockup1.png)
![Mockup 2](resources/mockups/mockup2.png)
![Mockup 3](resources/mockups/mockup3.png)
![Mockup 4](resources/mockups/mockup4.png)
