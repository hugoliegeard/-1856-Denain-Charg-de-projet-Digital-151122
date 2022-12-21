<?php

/*
 * Ce fichier regroupe toutes les fonctions
 * associées aux articles du site.
 */


/**
 * Permet de récupérer tous les
 * articles de la base de données.
 */
function getArticles() {
    global $dbh;
    $query = $dbh->query('SELECT * FROM article');
    return $query->fetchAll();
}

/**
 * Permet de récupérer un article
 * grâce à son alias dans la BDD.
 */
function getArticleByAlias($aliasArticle) {
    global $dbh;
    $sql = 'SELECT * FROM article WHERE article.alias = :alias';
    $query = $dbh->prepare($sql);
    $query->bindValue(':alias', $aliasArticle, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

/**
 * Permet de récupérer les articles
 * dans la BDD, via l'alias de la catégorie.
 */
function getArticlesByCategorieAlias($aliasCategorie) {
    global $dbh;
    $query = $dbh->prepare('
        SELECT article.*, categorie.libelle
            FROM article, categoriser, categorie
                WHERE article.id = categoriser.idArticle
                    AND categoriser.idCategorie = categorie.id
                    AND categorie.alias = :alias');
    $query->bindValue(':alias', $aliasCategorie, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

/**
 * Permet de créer un article
 * dans la BDD.
 */
function createArticle() {}

/**
 * Permet de modifier un article
 * dans la BDD.
 */
function updateArticle() {}

/**
 * Permet de supprimer un article
 * dans la BDD.
 */
function deleteArticle() {}