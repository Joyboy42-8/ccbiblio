<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manufacturing+Consent&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: "Roboto";
        }

        header h1, footer {
            font-family: "Manufacturing Consent";
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-900 px-20 flex justify-between items-center text-white">
        <h1 class="text-5xl font-extrabold rotate-3 hover:text-amber-600 hover:rotate-none duration-300">CCbiblio</h1>
        <nav class="flex justify-around items-center gap-10">
            <a href="index.php" class=" text-white block py-6 hover:text-amber-600 text-xl">
                <span class="fa-solid fa-home hidden md:block"></span>
                Acceuil
            </a>
            <a href="index.php?controller=livre&action=index" class="text-white block py-6 hover:text-amber-600 text-xl">
                <span class="fa-solid fa-book hidden md:block"></span>
                Livres
            </a>
            <a href="index.php?controller=categorie&action=index" class="text-white block py-6 hover:text-amber-600 text-xl">
                <span class="fa-solid fa-layer-group hidden md:block"></span>
                Catégories
            </a>
        </nav>
    </header>