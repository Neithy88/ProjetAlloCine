<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


include('Connexion/ConnectionBDD_A.php');


function getAllMovies() {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films');

    return $movies->fetchAll();

}

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films WHERE id_films='.$id.';');

    return $movies->fetch();
}

function getOneRealisateur($id) {
    global $dbh;

    $realisateur = $dbh->query('SELECT r.* 
        FROM films_realisateurs AS fr 
        JOIN realisateurs as r ON fr.id_realisateurs = r.id_realisateurs
        WHERE fr.id_films='.$id.';');

    return $realisateur->fetchAll();
}

function getAllRealisateur() {
    global $dbh;

    $realisateur = $dbh->query('SELECT * FROM realisateurs');

    return $realisateur->fetchAll();
}

function getOneActeur($id) {
    global $dbh;

    $acteurs = $dbh->query('SELECT a.* 
        FROM films_acteurs AS fa 
        JOIN acteurs as a ON fa.id_acteurs = a.id_acteurs
        WHERE fa.id_films='.$id.';');

    return $acteurs->fetchAll();
}

// function getTheActors($id) {
//     global $dbh;

//     $actors = $dbh->query('SELECT * FROM acteurs JOIN films_acteurs ON acteurs.id_acteurs = films_acteurs.id_acteurs JOIN acteurs ON films.id_films= films_acteurs.id_films WHERE films.id_films='.$actors.';');

//     return $actors->fetchAll();
// }


//  anjum//

// function getMoviesByGenders($gender_id) {
//     global $dbh;

//     $movies = $dbh->query('SELECT *
//     FROM films_genres.id_films
//     JOIN genres ON genres.id_genres= films_genres.id_genres
//     WHERE genres.id_genres='.$gender_id.';');

//     return $movies->fetchAll();
// }

// function getAllGenders() {
//     global $dbh;

//     $Allgenders = $dbh->query('SELECT id_genres,`genre` FROM `genres`');
//     return $Allgenders->fetchAll();
//     //return $Allgenders->fetchAll(PDO::FETCH_COLUMN, 0);

// }

function getOneGender($id) {
    global $dbh;

    $genders = $dbh->query('SELECT genres.*
    FROM films_genres
    JOIN genres ON genres.id_genres= films_genres.id_genres
    WHERE films_genres.id_films='.$id.';');

    return $genders->fetchAll();
}





