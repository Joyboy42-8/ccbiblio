<form action="../public/index.php?controller=categorie&action=modifier&id=<?= $categorie["id"] ?>" method="post" class="shadow-xl rounded-2xl p-5 w-96 mx-auto my-10">
    <div class="my-3">
        <label for="categorie" class="font-bold mb-2 text-lg">Nom Catégorie</label>
        <input type="text" name="new_categorie" id="categorie" class="border border-gray-600 rounded-xl p-3 text-gray-600" value="<?= $categorie["nom"] ?>" required>
    </div>
    <button type="submit" class="bg-amber-600 text-black p-5 rounded-xl shadow">Modifier Catégorie</button>
</form>