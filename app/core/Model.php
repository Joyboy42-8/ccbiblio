<?php


abstract class Model
{
    public $connexion;

    // Constructeur qui appelle la connexion à la base de donnée
    public function __construct()
    {
        require_once "../config/database.php";
        global $connexion;
        $this->connexion = $connexion;
    }

    // Ajouter un enregistrement dans une table
    public function creer($table, array $donnees = [])
    {
        $colonnes = implode(", ", array_keys($donnees));
        $valeurs = array_values($donnees);
        $params = [];
        for($i = 0; $i < count($donnees); $i++) {
            $params[] = "?";
        } 
        $replace = implode(", ", $params);
        $requete = $this->connexion->prepare("INSERT INTO $table($colonnes) VALUES ($replace)");
        return $requete->execute($valeurs);
    }

    // Modifier une donnée
    public function modifier($table, array $donnees = [], $id)
    {
        $champs = [];
        $valeurs = [];

        // Construction des champs et récupération des valeurs dans l'ordre
        foreach ($donnees as $key => $value) {
            $champs[] = "$key = ?";
            $valeurs[] = $value;
        }

        // Ajouter l'id à la fin (pour le WHERE)
        $valeurs[] = $id;

        // Construire la requête UPDATE avec espaces bien placés
        $sql = "UPDATE $table SET " . implode(", ", $champs) . " WHERE id = ?";

        $requete = $this->connexion->prepare($sql);

        return $requete->execute($valeurs);
    }


    // Lire tout les données d'une table
    public function lire_tout($table)
    {
        $requete = $this->connexion->prepare("SELECT * FROM $table");
        $requete->execute();
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    // Lire une donnée de table selon l'id
    public function lire_par_id($table, $id)
    {
        $requete = $this->connexion->prepare("SELECT * FROM $table WHERE id = ?");
        $requete->execute([$id]);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return $resultat;
    }

    // Supprimer une donnée
    public function supprimer($table, $id)
    {
        $requete = $this->connexion->prepare("DELETE FROM $table WHERE id = ?");
        return $requete->execute([$id]);
    }
}
