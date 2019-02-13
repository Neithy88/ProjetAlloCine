<?php
//Le modèle contient toutes les fonctions d'appel à la base de données.
include('Connexion/ConnectionBDD_A.php');

function getMoviesByGenders($gender_id) {
    global $dbh;
    $genders = $dbh->query('SELECT *
    FROM films_genres
    JOIN genres ON genres.id_genres= films_genres.id_genres
    JOIN films ON films.id_films= films_genres.id_films
    WHERE genres.id_genres='.$gender_id.';');
    return $genders->fetchAll();
}

function getAllGenders() {
    global $dbh;
    global $gender_id;
    global $genders;
    $Allgenders = $dbh->query('SELECT * FROM `genres`');
    return $Allgenders->fetchAll();
 
}
// FROM films_genres.id_films
function getOneGender($id) {
    global $dbh;

    $genders = $dbh->query('SELECT genres.*
    FROM films_genres
    JOIN genres ON genres.id_genres= films_genres.id_genres
    WHERE films_genres.id_films='.$id.';');

    return $genders->fetchAll();
}
?>