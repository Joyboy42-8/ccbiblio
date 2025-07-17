<?php

include "../autoloader.php";

class Livre extends Model {

    public function lire_tout_avec_categorie()
    {
        $requete = $this->connexion->prepare("SELECT livres.*, categories.nom AS categorie_nom
            FROM livres
            JOIN categories ON livres.id_categorie = categories.id");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

}