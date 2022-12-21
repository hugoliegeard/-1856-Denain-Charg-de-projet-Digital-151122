<?php
// Inclure le header de ma page
include_once './partials/header.php';

/*
 * La SUPERGLOBAL $_GET, permet d'accéder
 * aux paramètres de ma route (URL).
 * ---------------------------------
 * Ex. categorie.php?alias=economie
 * Ici, j'ai un paramètre "alias"
 * qui contient la valeur "economie".
 */
//var_dump( $_GET ); // Permet de voir le contenu de $_GET
//var_dump( $_GET['alias'] ); // Permet de récupérer le paramètre GET "alias"

// Récupération de l'alias de la catégorie dans l'URL
$aliasCategorie = $_GET['alias'] ?? '';

// Récupération des articles de la catégorie via l'alias
$articles = getArticlesByCategorieAlias($aliasCategorie);

?>

    <!-- Contenu du site -->
    <!-- .p-3.mx-auto.text-center>h1.display-4{Actunews} -->
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4 text-capitalize">
            <!--
                Version ternaire, on vérifie si $_GET[alias] existe.
                S'il existe, alors on l'affiche, sinon on affiche 'actunews'
             -->
            <?php // echo isset($_GET['alias']) ? $_GET['alias'] : 'Actunews' ?>

            <!--
                À partir de PHP 7.0, on peut encore réduire notre expression.
             -->
            <?= $_GET['alias'] ?? 'Actunews' ?>
        </h1>
    </div>

    <!-- .py-5.bg-light>.container>.row>(.col-md-4.mt-4)*6 -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <?php if (empty($articles)) { ?>
                    <div class="alert alert-info">
                        Pas d'article dans cette catégorie...
                    </div>
                <?php } ?>

                <?php foreach ($articles as $article) { ?>
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="<?= $article['image'] ?>" class="card-img-top"
                                 alt="<?= $article['titre'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $article['titre'] ?></h5>
                                <p class="card-text"><?= resume($article['contenu'], 90) ?></p>
                                <a href="<?= path($aliasCategorie . '/' . $article['alias'].'.html') ?>"
                                   class="btn btn-dark">Lire la suite</a>
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