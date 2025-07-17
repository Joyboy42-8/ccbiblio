<form action="../public/index.php?controller=livre&action=modifier&id=<?= $livre["id"] ?>" method="post" class="shadow-xl rounded-2xl p-5 w-96 mx-auto my-10">
    <div class="my-3">
        <label for="titre" class="font-bold mb-2 text-lg">Titre du livre</label>
        <input type="text" name="titre" id="titre" class="border border-gray-600 rounded-xl p-3 text-gray-600" value="<?= $livre["titre"] ?>" required>
    </div>
    <div class="my-3">
        <label for="auteur" class="font-bold mb-2 text-lg">Auteur du livre</label>
        <input type="text" name="auteur" id="auteur" class="border border-gray-600 rounded-xl p-3 text-gray-600" value="<?= $livre["auteur"] ?>" required>
    </div>
    <div class="my-3">
        <label for="categorie" class="font-bold mb-2 text-lg">Catégorie</label>
        <select name="categorie" id="categorie" class="border border-gray-600 rounded-xl p-3 text-gray-600" required>

            <?php foreach ($categories as $categorie): ?>
                <option value="<?= $categorie["id"] ?>" <?= $categorie["id"] == $livre["id_categorie"] ? "selected" : "" ?>>
                    <?= $categorie["nom"] ?>
                </option>
            <?php endforeach; ?>

        </select>
    </div>
    <button type="submit" class="bg-amber-600 text-black p-5 rounded-xl shadow">Modifier Livre</button>
</form>