<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films WHERE id_films='.$id.';');

    return $movies->fetch();
}
