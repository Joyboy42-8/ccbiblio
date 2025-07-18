<?php

try {
    global $connexion;
    $connexion = new PDO("pgsql:host=dpg-d1t5s1c9c44c73d651ug-a;dbname=bibliotheque_hvs4;charset=utf8", "root", "mp8Dv1m4Pf5Pjd8DnXELSgU24iFksN8b");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}