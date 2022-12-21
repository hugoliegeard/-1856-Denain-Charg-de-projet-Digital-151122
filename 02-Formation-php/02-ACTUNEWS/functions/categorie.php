<?php

/**
 * Permet de récupérer toutes les
 * catégories de la base de données.
 */
function getCategories() {
    global $dbh;
    $query = $dbh->query('SELECT * FROM categorie');
    return $query->fetchAll();
}