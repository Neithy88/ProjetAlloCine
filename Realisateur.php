<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

// function getAllMoviesDirectors() {
//     global $dbh;

//     $moviesdirectors = $dbh->query('SELECT * FROM films_realisateurs');

//     return $moviesdirectors->fetchAll();

// }

// function getOneMovieDirector($id) {
//     global $dbh;

//     $moviesdirectors = $dbh->query('SELECT * FROM films_realisateurs WHERE id_films='.$id.';');

//     return $moviesdirectors->fetch();
// }


function getAllDirectors() {
    global $dbh;

    $directors = $dbh->query('SELECT * FROM realisateurs');

    return $directors->fetchAll();

}

function getOneDirector($id) {
    global $dbh;

    $directors = $dbh->query('SELECT * FROM realisateurs WHERE id_realisateurs='.$id.';');

    return $directors->fetch();
}