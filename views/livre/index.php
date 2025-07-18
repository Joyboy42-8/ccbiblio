<section class="flex justify-center items-center gap-5 my-5 text-center">
    <a href="index.php?controller=livre&action=creer" class="bg-blue-900 text-xl rounded-2xl p-3 text-white hover:border hover:border-blue-900 hover:text-blue-900 hover:bg-gray-100 duration-300 cursor-pointer">Ajouter un Livre</a>
</section>

<main class="grid grid-cols-3 gap-5 m-5">
    <?php foreach ($livres as $livre): ?>
        <article class="rounded-xl shadow-xl flex flex-col justify-center items-center gap-5 p-5">
            <div>
                <h3 class="font-bold"> <?= $livre["titre"] ?> </h3>
            </div>
            <i> <?= $livre["auteur"] ?> </i>
            <p class="underline">
                <?= isset($livre["categorie_nom"]) ? htmlspecialchars($livre["categorie_nom"]) : "Catégorie inconnue" ?>
            </p>
            <div class="flex gap-3">
                <a href="index.php?controller=livre&action=modifier&id=<?= $livre['id'] ?>" class="bg-blue-900 text-white p-3 rounded-xl hover:bg-blue-800">Modifier</a>
                <a href="index.php?controller=livre&action=supprimer&id=<?= $livre['id'] ?>" onclick="return confirm('Confirmer la suppression ?')" class="bg-amber-600 hover:bg-amber-700 text-white p-3 rounded-xl">Supprimer</a>
            </div>
        </article>

    <?php endforeach; ?>
</main>