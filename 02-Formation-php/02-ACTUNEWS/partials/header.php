<?php

// Chargement des fonctions globales
require_once __DIR__ . '/../functions/global.php';

// Connexion à la BDD
require_once __DIR__ . '/../config/database.php';

// Récupération des fonctions
require_once __DIR__ . '/../functions/article.php';
require_once __DIR__ . '/../functions/categorie.php';


// Récupération des catégories de ma base (SIMULE)
$categories = getCategories();
// $categories = ['Politique', 'Economie', 'Culture', 'Sport'];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ActuNews | Site d'Actualité</title>
</head>
<body>

<!-- Menu du site -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Actunews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= path('index.php') ?>">
                        Accueil
                    </a>
                </li>
                <?php foreach ($categories as $categorie) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= path($categorie['alias'].'.html') ?>">
                            <?= $categorie['libelle'] ?>
                        </a>
                    </li>
                <?php } // fin du foreach ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin du menu du site -->