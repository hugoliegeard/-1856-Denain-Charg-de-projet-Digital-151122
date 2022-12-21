<?php

/*
 * Fichier de configuration de la BDD.
 * new PDO('mysql:host=[HOSTNAME];dbname=[DBNAME]', '[USERNAME]', '[PASSWORD]');
 * PDO::ERRMODE_WARNING : Permet d'afficher les erreurs SQL sur la page.
 * PDO::FETCH_ASSOC : Permet de retourner le résultat sous forme de tableau associatif.
 */

try {
    $dbh = new PDO('mysql:host=localhost;dbname=actunews', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
