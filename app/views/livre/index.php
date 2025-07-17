<section class="flex justify-center items-center gap-5 my-5 text-center">
    <a href="index.php?controller=livre&action=creer" class=" bg-blue-900 text-xl rounded- py-5 text-white">Ajouter un Livre</a>
</section>

<main class="grid grid-cols-3 gap-5">
    <?php foreach ($livres as $livre): ?>
        <article class="rounded-xl shadow-2xl flex flex-col justify-center items-center gap-5 p-5">
            <h3> <?= $livre["titre"] ?> </h3>
            <i> <?= $livre["auteur"] ?> </i>
            <p>
                <?= isset($livre["categorie_nom"]) ? htmlspecialchars($livre["categorie_nom"]) : "Catégorie inconnue" ?>
            </p>
            <div class="flex gap-3">
                <a href="index.php?controller=livre&action=modifier&id=<?= $livre['id'] ?>">Modifier</a>
                <a href="index.php?controller=livre&action=supprimer&id=<?= $livre['id'] ?>" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
            </div>
        </article>

    <?php endforeach; ?>
</main>