<a href="index.php?controller=categorie&action=creer" class="block w-full text-center bg-amber-600 text-xl rounded-xl p-3">Ajouter une Catégorie</a>


<!-- <main class="grid grid-cols-3 gap-5"> -->
    <table class="w-full border border-gray-50">
        <thead>
            <th>ID</th>
            <th>Catégorie</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <?php foreach ($categories as $categorie): ?>
                <tr class="text-center border">
                    <td> <?= $categorie["id"] ?> </td>
                    <td> <?= $categorie["nom"] ?> </td>
                    <td class="gap-5">
                        <a href="index.php?controller=categorie&action=modifier&id=<?= $categorie['id'] ?>">Modifier</a>
                        <a href="index.php?controller=categorie&action=supprimer&id=<?= $categorie['id'] ?>" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
<!-- </main> -->