<?php

// Si on a une info dans $_GET['page'], c'est la page demandée
if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'Home'; //Si il n'y a rien dans $_GET['page'], on va sur la home
}

//On passe la première lettre en majuscule car les controlleurs s'appellent FilmController.php et HomeController.php mais les URLs sont en général en minuscule

// On inclut le controller en fonction de la page demandée
include('Controllers/'.$page.'Controller.php');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////$_SERVER['REQUEST_URI'], '/')/////////////////////////////////////////////////////////////////////////////////////////////

// // Grabs the URI and breaks it apart in case we have querystring stuff

// if (isset($_SERVER["REQUEST_URI"]) && !empty($_SERVER["REQUEST_URI"])) {


// $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// }

// $request_uri[0] = str_replace("allocine_site/","",$request_uri[0]);
// var_dump($request_uri);

// // Route it up!
// switch ($request_uri[0]) {
//     // Home page
//     case '/':
//         require_once 'Controllers/HomeController.php';
//         break;
//     // // Film page
//     // case 'Film':
//     //     require '../Controllers/FilmController.php';
//     //     break;
//     // // Everything else
//     // default:
//     //     header('HTTP/1.0 404 Not Found');
//     //     require '../Views/404View.php';
//     //     break;
// }