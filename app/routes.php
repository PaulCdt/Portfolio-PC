<?php 

/**
 * Tableau associatif $routes :
 * Pour chaque route : 
 * - nom 
 * - path (qui apparaît dans l'URL)
 * - controller : fichier à appeler 
 */

$routes = [

    // Page d'accueil
    'home' => [
        'path' => '/',
        'controller' => 'home.php'
    ],

    // Création de compte
    'signup' => [
        'path' => '/signup',
        'controller' => 'signup.php'
    ],

    // Connexion utilisateur
    'login' => [
        'path' => '/login',
        'controller' => 'login.php'
    ],

    // Déconnexion
    'logout' => [
        'path' => '/logout',
        'controller' => 'logout.php'
    ],
    // Portfolio
    'portfolio' => [
        'path' => '/portfolio',
        'controller' => 'portfolio.php'
    ],
    // Version du portfolio
    'portfolio-static' => [
        'path' => '/portfolio-static',
        'controller' => 'portfolio-static.php'
    ],
    'portfolio-interactive' => [
        'path' => '/portfolio-interactive',
        'controller' => 'portfolio-interactive.php'
    ],
    'projet-reservia' => [
        'path' => '/projet-reservia',
        'controller' => 'projet-reservia.php'
    ],
    'message' => [
        'path' => '/message',
        'controller' => 'message.php'
    ],
];

return $routes;