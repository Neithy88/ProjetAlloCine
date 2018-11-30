<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

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

// function getMoviesByGenre($gender_id) {
//     global $dbh;

//     $movies = $dbh->query('SELECT * FROM movies WHERE gender_id='.$gender_id.';');

//     return $movies->fetchAll();
// }

function getAllGenders() {
    global $dbh;

    $genders = $dbh->query('SELECT * FROM genres');

    return $genders->fetchAll();

}

function getOneGender($id) {
    global $dbh;

    $genders = $dbh->query('SELECT * FROM genres WHERE id_genres='.$id.';');

    return $genders->fetch();
}