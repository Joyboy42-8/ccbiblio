<?php

include "../autoloader.php";

class CategorieController extends Controller
{
    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    }
    public function index()
    {
        $categories = $this->categorie->lire_tout("categories");
        Controller::render("categorie", "index", ["categories" => $categories]);
    }

    public function create()
    {
        Controller::render("categorie", "create");
    }

    public function store($nom)
    {
        $data = [
            "nom" => $nom
        ];
        return $this->categorie->creer("categories", $data);
    }

    public function edit($id)
    {
        $categorie = $this->categorie->lire_par_id("categories", $id);
        Controller::render("categorie", "edit", ["categorie" => $categorie]);
    }

    public function update($id, $nom)
    {
        $data = ["nom" => $nom];
        return $this->categorie->modifier("categories", $data, $id);
    }

    public function delete($id)
    {
        return $this->categorie->supprimer("categories", $id);
    }
}
