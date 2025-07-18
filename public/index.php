<?php

require_once "../autoloader.php";
$book = new LivreController();

// Gestion des Livres
if(isset($_GET["controller"]) && $_GET["controller"] == "livre") {

    if($_GET["action"] == "creer") {
        if(Controller::isPost()) {
            $titre = Controller::input("titre");
            $auteur = Controller::input("auteur");
            $categorie = Controller::input("categorie");

            echo $book->store($titre, $auteur, $categorie);

            Controller::rediriger("index.php?controller=livre&action=index");
        } else {
            $book->create();
        }
    } 

    if($_GET["action"] == "modifier" && isset($_GET["id"])) {
        if(Controller::isPost()) {
            $id = htmlspecialchars($_GET["id"]);
            $titre = Controller::input("titre");
            $auteur = Controller::input("auteur");
            $categorie = Controller::input("categorie");

            $book->update($id, $titre, $auteur, $categorie);

            Controller::rediriger("index.php?controller=livre&action=index");
        } else {
            $book->edit($_GET["id"]);
        }
    }
    
    if($_GET["action"] == "supprimer" && isset($_GET["id"])) {
        $book->delete(htmlspecialchars($_GET["id"]));
        
        Controller::rediriger("index.php?controller=livre&action=index");
    }

    if($_GET["action"] == "index") {
        $book->acceuil();
    }
}

// Gestion des Catégories
elseif(isset($_GET["controller"]) && $_GET["controller"] == "categorie") {
    $type = new CategorieController();

    if ($_GET["action"] == "creer") {
        if (Controller::isPost()) {
            $nom = Controller::input("categorie");

            $type->store($nom);

            Controller::rediriger("index.php?controller=categorie&action=index");
        } else {
            $type->create();
        }
    }

    if ($_GET["action"] == "modifier" && isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        if (Controller::isPost()) {
            $nom = Controller::input("new_categorie");

            $type->update($id, $nom);

            Controller::rediriger("index.php?controller=categorie&action=index");
        } else {
            $type->edit($id);
        }
    }

    if ($_GET["action"] == "supprimer" && isset($_GET["id"])) {
        $type->delete(htmlspecialchars($_GET["id"]));

        Controller::rediriger("index.php?controller=categorie&action=index");
    }

    if ($_GET["action"] == "index") {
        $type->index();
    }
}

else {
    $book->acceuil();
}