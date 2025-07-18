<section class="flex justify-center items-center gap-5 my-5 text-center">
    <a href="index.php?controller=categorie&action=creer" class="bg-blue-900 text-xl rounded-2xl p-3 text-white hover:border hover:border-blue-900 hover:text-blue-900 hover:bg-gray-100 duration-300 cursor-pointer">Ajouter une Catégorie</a>
</section>

<table class="w-full table-auto border border-gray-200 shadow-md rounded-md overflow-hidden">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="py-3 px-4">ID</th>
            <th class="py-3 px-4">Catégorie</th>
            <th class="py-3 px-4" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $categorie): ?>
            <tr class="text-center border-b hover:bg-gray-100 transition-colors duration-200">
                <td class="py-2 px-4"> <?= $categorie["id"] ?> </td>
                <td class="py-2 px-4 font-medium text-gray-800"> <?= $categorie["nom"] ?> </td>
                <td class="py-2 px-4 flex justify-center items-center gap-3">
                    <a href="index.php?controller=categorie&action=modifier&id=<?= $categorie['id'] ?>"
                        class="bg-amber-600 hover:bg-amber-700 text-white text-sm px-3 py-1 rounded shadow">
                        Modifier
                    </a>
                    <a href="index.php?controller=categorie&action=supprimer&id=<?= $categorie['id'] ?>"
                        onclick="return confirm('Confirmer la suppression ?')"
                        class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-3 py-1 rounded shadow">
                        Supprimer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>