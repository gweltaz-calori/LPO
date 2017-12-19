<?php

require_once( './autoload.php');
require_once "./vendor/autoload.php";




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

    $nichoirController->indexAction();

});

$app->GET('/', function ($request, $response, $args) use ($adherentController) {

    $adherentController->indexAction();
});

$app->POST('/login', function ($request, $response, $args) use ($adherentController) {

    $adherentController->loginAction($request,$response);
});

$app->run();


?>

