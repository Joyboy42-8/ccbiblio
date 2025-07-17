<form action="../public/index.php?controller=categorie&action=creer" method="post" class="mx-auto shadow-xl rounded-2xl p-5 w-xl my-10">
    <div class="my-3">
        <label for="categorie" class="font-bold mb-2 text-lg">Nom catégorie</label>
        <input type="text" name="categorie" id="categorie" class="block border border-gray-600 rounded-lg p-3 text-gray-600" placeholder="Ex: Science-Fiction..." required>
    </div>

    <button type="submit" class="bg-amber-600 text-black p-5 rounded-xl shadow">Ajouter Catégorie</button>
</form>