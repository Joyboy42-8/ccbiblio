# 📚 Gestion de Bibliothèque CC

Ce projet est une application web de gestion d'une bibliothèque, développée en PHP orienté objet avec une architecture inspirée du MVC (Modèle-Vue-Contrôleur). Il permet de gérer les livres et les catégories.

## ✅ Fonctionnalités principales
### Livres

- Ajouter un livre

- Modifier un livre

- Supprimer un livre

- Lister tous les livres

### Catégories

- Ajouter une catégorie

- Modifier une catégorie

- Supprimer une catégorie

- Afficher la liste des catégories 


## 🧠 Technologies utilisées
- PHP

- HTML / CSS

- Tailwind CSS

- MySQL (base de données)

- Architecture MVC simple

## 🛠️ Installation et utilisation
Cloner le projet ou le copier dans un dossier de votre serveur local (ex: htdocs/ pour XAMPP).

Créer une base de données MySQL nommée bibliotheque avec les tables Livres et Catégorie

Importer le fichier bibliotheque.sql pour créer les tables.

Modifier les paramètres de connexion dans le fichier Database.php si besoin.

Lancer le projet via un serveur local (http://localhost/nom-du-projet).


## 🔍 Structure du projet
- /controllers      -> Contient tous les contrôleurs
- /core             -> Contient les classes mères Model et Controller
- /models           -> Contient les classes métiers et la couche d'accès aux données
- /views            -> Contient les fichiers HTML (avec du PHP inclus)
- /database         -> Contient la connexion à la base de donnée avec PDO
- /public/index.php        -> Point d’entrée du projet
- /autoloader.php   -> Chargement automatique des classes
- /assets         -> (optionnel) pour les assets CSS/JS


## ✍️ Auteur
Nom : **Joyboy42-8**

Contact : lucasfalk70@gmail.com