<?php

try {
    global $connexion;
    $connexion = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8", "root", "");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}