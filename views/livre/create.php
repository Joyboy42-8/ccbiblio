<form action="../public/index.php?controller=livre&action=creer" method="post" class="mx-auto shadow-xl rounded-2xl p-5 w-xl my-10">
    <div class="my-3">
        <label for="titre" class="font-bold mb-2 text-lg">Titre du livre</label>
        <input type="text" name="titre" id="titre" class="w-full focus:border-amber-600 outline-none block border border-gray-600 rounded-lg p-3 text-gray-600" placeholder="Ex: Les Contemplations..." required>
    </div>
    <div class="my-3">
        <label for="auteur" class="font-bold mb-2 text-lg">Auteur du livre</label>
        <input type="text" name="auteur" id="auteur" class="w-full focus:border-amber-600 outline-none block border border-gray-600 rounded-lg p-3 text-gray-600" placeholder="Ex: Victor Hugo" required>
    </div>
    <div class="my-3">
        <label for="categorie" class="font-bold mb-2 text-lg">Catégorie</label>
        <select name="categorie" id="categorie" class="w-full focus:border-amber-600 outline-none block border border-gray-600 rounded-lg p-3 text-gray-600" required>

            <?php foreach($categories as $categorie): ?>
                <option value="<?= $categorie["id"] ?>"> <?= $categorie["nom"] ?></option>
            <?php endforeach; ?>

        </select>
    </div>
    <button type="submit" class="bg-amber-600 text-black p-3 text-white font-bold rounded-xl shadow block mx-auto w-1/3">Créer Livre</button>
</form>