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

function getMoviesByGenre($gender_id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films JOIN films_genres ON films.id_films = films_genres.id_films JOIN genres ON genres.id_genres= films_genres.id_genres WHERE genres.id_genres='.$gender_id.';');

    return $movies->fetchAll();
}

function getAllGenders() {
    global $dbh;

    $Allgenders = $dbh->query('SELECT id_genres,`genre` FROM `genres`');
    return $Allgenders->fetchAll();
    //return $Allgenders->fetchAll(PDO::FETCH_COLUMN, 0);

}

function getOneGender($id) {
    global $dbh;

    $genders = $dbh->query('SELECT * FROM genres WHERE id_genres='.$id.';');

    return $genders->fetch();
}

