<?php

require_once( './autoload.php');
require_once "./vendor/autoload.php";

session_start();


$nichoirController = new \Swagger\App\Controller\NichoirController();
$adherentController = new \Swagger\App\Controller\AdherentController();



$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->GET('/nichoirs', function ($request, $response, $args) use ($nichoirController) {
    if(!isset($_SESSION['user'])) {
        return $response->withRedirect('/');
    }
    $nichoirController->indexAction();

});


$app->GET('/', function ($request, $response, $args) use ($adherentController) {

    if(isset($_SESSION['user'])) {
        return $response->withRedirect('/nichoirs');
    }
    $adherentController->indexAction();
});

$app->POST('/login', function ($request, $response, $args) use ($adherentController) {

    return $adherentController->loginAction($request,$response);
});

$app->GET('/logout', function ($request, $response, $args) use ($adherentController) {

    return $adherentController->logoutAction($request,$response);
});

$app->run();


?>

