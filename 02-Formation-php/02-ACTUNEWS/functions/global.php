<?php

// -- Constantes de configuration
const SITE_URL = 'http://localhost/02-Formation-php/02-ACTUNEWS/';

/**
 * Permet de générer les URLs
 * de notre site internet.
 */
function path($path): string
{
    return SITE_URL . $path;
}

/*
 * Ce fichier regroupe toutes les fonctions
 * utile pour l'ensemble du site.
 */

/**
 * Permet de générer à partir d'un texte,
 * une accroche, un résumé de X caractères.
 */
function resume($text, $nbChar = 150)
{

    # Supprimer les balises HTML
    $string = strip_tags($text);

    # Vérifier si mon $text est plus grand que $nbChar
    if (strlen($string) > $nbChar) {

        # Alors je peux couper ma chaine
        $stringCut = substr($string, 0, $nbChar);

        # Mais je veux m'assurer de ne pas couper de mot
        $string = substr($stringCut, 0, strrpos($stringCut, ' '));
    }

    return $string . '...';

}