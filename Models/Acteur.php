<?php
//Le modèle contient toutes les fonctions d'appel à la base de données.
include('Connexion/ConnectionBDD_A.php');

function getMoviesByActors($acteurs_id) {
    global $dbh;

    $acteurs = $dbh->query('SELECT *
    FROM films_acteurs 
    JOIN acteurs ON acteurs.id_acteurs= films_acteurs.id_acteurs
    JOIN films ON films.id_films= films_acteurs.id_films
    WHERE acteurs.id_acteurs='. $acteurs_id .';');
    return   $acteurs->fetchAll();
}

function getAllActeurs() {
    global $dbh;
    $Allactors = $dbh->query('SELECT id_acteurs,nom,prenom FROM `acteurs`');
    return $Allactors->fetchAll();
    //return $Allgenders->fetchAll(PDO::FETCH_COLUMN, 0);
    
    } 

    // function getMoviesByActors($acteur_id) {
    //     global $dbh;
    
    //     $acteur_id = $dbh->query('SELECT *
    //     FROM films_acteurs.id_films
    //     JOIN acteurs ON acteurs.id_acteurs= films_acteurs.id_acteurs
    //     WHERE acteurs.id_acteurs='.$acteur_id.';');
    
    //     return $acteur_id->fetchAll();
    // }