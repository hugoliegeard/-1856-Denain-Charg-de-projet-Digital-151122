<?php
// Inclure le header de ma page
include_once './partials/header.php';

// Récupération de notre article via son alias
$aliasArticle = $_GET['aliasArticle'] ?? '';
$article = getArticleByAlias($aliasArticle);
?>

<!-- Contenu du site -->
<div class="p-3 mx-auto text-center">
    <h1 class="display-4 text-capitalize">
        <?= $article['titre'] ?>
    </h1>
</div>

<!-- .py-5.bg-light>.container>.row>(.col-md-4.mt-4)*6 -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 mt-4">
                    <img src="<?= $article['image'] ?>" class="card-img-top"
                         alt="<?= $article['titre'] ?>">
            </div>
            <div class="col-6 mt-4">
                <?= $article['contenu'] ?>
            </div>
        </div>
    </div>
</div>

<!-- Fin du contenu du site -->

<?php
// Chargement du pied de page
require_once './partials/footer.php';
?>