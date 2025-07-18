<?php

include "../autoloader.php";

abstract class Controller {
    public static function view($fichier) {
        require $fichier;
    }

    public static function render($dossier, $fichier, $donnees = []) {
        extract($donnees);
        // Vérifier si la vue existe
        $path = __DIR__ . "/../views/" . $dossier . "/" . $fichier . ".php";
        if (file_exists($path)) {
            // Inclure header
            include_once __DIR__ . "/../views/additionnals/header.php";

            // Inclure la vue principale
            include_once $path;

            // Inclure footer
            include_once __DIR__ . "/../views/additionnals/footer.php";
        } else {
            echo "<h1>La vue demandée n'existe pas : $path</h1>";
        }
    }

    public static function rediriger($url) {
        header("location: $url");
        exit();
    }

    public static function isPost() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            return true;
        } else {
            return false;
        }
    }

    public static function isGet() {
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            return true;
        } else {
            return false;
        }
    }

    public static function input($key) {
        $result = null;
        if(Controller::isPost()) {
            if(!empty($_POST[$key])) {
                $result = htmlspecialchars($_POST[$key]);
            }
        } elseif (Controller::isGet()) {
            if(!empty($_GET[$key])) {
                $result = htmlspecialchars($_GET[$key]);
            }
        }
        return $result;
    }


}