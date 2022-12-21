<?php

/*
 * La fonction include permet d'inclure un fichier PHP
 * dans un autre. En cas de pépin, un warning s'affiche,
 * mais la page se charge.
 */
// include_once './partials/headers.php';

/*
 * La fonction require effectue la même chose.
 * En revanche en cas de pépin, une FATAL ERROR est
 * affiché. La page ne se charge pas.
 */

// Inclure le header de ma page
include_once './partials/header.php';

// Récupération des articles
$articles = getArticles();
// var_dump($articles);

?>

    <!-- Contenu du site -->
    <!-- .p-3.mx-auto.text-center>h1.display-4{Actunews} -->
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4">Actunews</h1>
    </div>

    <!-- .py-5.bg-light>.container>.row>(.col-md-4.mt-4)*6 -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($articles as $article) { ?>
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="<?= $article['image'] ?>" class="card-img-top"
                                 alt="<?= $article['titre'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $article['titre'] ?></h5>
                                <p class="card-text"><?= resume($article['contenu'], 90) ?></p>
                                <a href="actualite/<?= $article['alias'] ?>.html" class="btn btn-dark">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } // end foreach ?>
            </div>
        </div>
    </div>

    <!-- Fin du contenu du site -->

<?php
// Chargement du pied de page
require_once './partials/footer.php';
?>