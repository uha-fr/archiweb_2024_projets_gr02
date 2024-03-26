<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('CLASSDIR', ROOT . DS . 'src');
define('CONTROLLERSDIR', CLASSDIR . DS . 'Controllers');
define('MODELSDIR', CLASSDIR . DS . 'Models');  
define('VIEWSDIR', CLASSDIR . DS . 'View');

require CLASSDIR . DS . 'Router.php';

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH); // Récupérer la route sans les paramètres GET

// Vérifier si la chaîne de requête est présente
$queryString = parse_url($request, PHP_URL_QUERY);
if (null !== $queryString) {
    // Si elle est présente, alors la récupérer et la parser
    parse_str($queryString, $queryParams);
} else {
    // Si elle est absente, initialiser $queryParams comme un tableau vide
    $queryParams = [];
}

// Maintenant, $queryParams contient les paramètres GET, qu'ils soient présents ou non


$r = new Router();
$r->manageRequest($path,$queryParams);  // Analyse, dispatch

?>
