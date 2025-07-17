<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="style/output.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet"> -->

</head>

<body class="bg-gray-100">
    <header class="bg-blue-900 px-20 flex justify-between items-center text-white">
        <h1 class="text-4xl font-extrabold rotate-3 hover:text-amber-600 hover:rotate-none duration-300">CCbiblio</h1>
        <nav class="flex justify-around items-center gap-10">
            <a href="index.php" class=" text-white block py-6 hover:text-amber-600 text-xl">Acceuil</a>
            <a href="index.php?controller=livre&action=index" class="text-white block py-6 hover:text-amber-600 text-xl">Livres</a>
            <a href="index.php?controller=categorie&action=index" class="text-white block py-6 hover:text-amber-600 text-xl">Catégorie</a>
        </nav>
    </header>
