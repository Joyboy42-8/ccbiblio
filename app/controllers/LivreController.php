<?php

include "../autoloader.php";

class LivreController extends Controller
{
    private $livre;
    private $categorie;

    public function __construct() {
        $this->livre = new Livre();
        $this->categorie = new Categorie();
    }
    public function index() {
        $livres = $this->livre->lire_tout("livres");
        Controller::render("livre","index", ["livres" => $livres]);
    }

    public function acceuil() {
        $livres = $this->livre->lire_tout_avec_categorie();
        Controller::render("livre", "index", ["livres" => $livres]);
    }

    public function create() {
        $categories = $this->categorie->lire_tout("categories");
        Controller::render("livre", "create", ["categories" => $categories]);
    }

    public function store($titre, $auteur, $id_categorie) {
        $data = [
            "titre" => $titre,
            "auteur" => $auteur,
            "id_categorie" => $id_categorie
        ];
        return $this->livre->creer("livres", $data);
    }

    public function edit($id) {
        $livre = $this->livre->lire_par_id("livres",$id);
        $categories = $this->livre->lire_tout("categories");
        Controller::render("livre", "edit", ["livre" => $livre, "categories" => $categories]);
    }

    public function update($id, $titre, $auteur, $categorie) {
        $data = [
            "titre" => $titre,
            "auteur" => $auteur,
            "id_categorie" => $categorie
        ];
        return $this->livre->modifier("livres",$data,$id);
    }

    public function delete($id) {
        return $this->livre->supprimer("livres", $id);
    }
}
