# Projet de Gestion des Continents, Pays et Villes

## Description
Ce projet implémente une application orientée objet pour gérer des informations géographiques, incluant les continents, pays et villes.  
Le système permet l'authentification des utilisateurs (Admin/User), ainsi que des opérations CRUD (Créer, Lire, Modifier, Supprimer) sur les entités Continent, Pays, et Ville.  

---

## Fonctionnalités

### 1. En tant que concepteur
- **Diagramme de cas d’utilisation :** Correction de la version 1 en ajoutant les fonctionnalités manquantes et en optimisant la conception.  
- **Diagramme UML des classes :** Réalisation d’un diagramme UML pour représenter les relations et les dépendances entre les entités.

### 2. En tant que développeur BackEnd
- **Gestion des entités :**
  - **Continent :**  
    - ID  
    - Nom  
    - Nombre de pays associés  
  - **Pays :**  
    - ID_Pays  
    - Nom_Pays  
    - Population_Pays  
    - Langue_Pays  
    - Continent associé  
  - **Ville :**  
    - IDVille  
    - Nom_Ville  
    - Description_Ville  
    - Type_Ville (capitale ou autre)  
    - Pays associé  

- **Fonctionnalités principales :**
  - Authentification (User/Admin).  
  - Ajouter un continent, un pays ou une ville avec leurs informations.  
  - Modifier ou supprimer un continent, un pays ou une ville.  
  - Afficher les listes des continents, des pays et des villes avec leurs détails.

- **Architecture de la base de données :**
  - Utilisation de PDO pour gérer les connexions et les requêtes SQL.  
  - Gestion sécurisée des données avec des requêtes préparées.  
  - Manipulation des données avec les fonctions prédéfinies de PHP.

---

## Prérequis
- **Serveur web local** : Apache/Nginx  
- **Base de données** : MySQL  
- **PHP** : Version 7.4 ou supérieure  

---

## Installation

1. Clonez le dépôt GitHub :
   ```bash
   git clone <lien-du-repo>
