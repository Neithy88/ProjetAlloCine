<?php
//Le modèle contient toutes les fonctions d'appel à la base de données.
include('Connexion/ConnectionBDD_A.php');

function getMoviesByRealisateurs($realisateurs_id) {
    global $dbh;
    $realisateurs = $dbh->query('SELECT *
    FROM films_realisateurs 
    JOIN realisateurs ON realisateurs.id_realisateurs= films_realisateurs.id_realisateurs
    JOIN films ON films.id_films= films_realisateurs.id_films
    WHERE realisateurs.id_realisateurs='. $realisateurs_id .';');
    return   $realisateurs->fetchAll();
}

function getAllRealisateurs() {
    global $dbh;
    $Allrealisateurs = $dbh->query('SELECT * FROM `realisateurs`');
    return $Allrealisateurs->fetchAll();
    } 
