<?php

require_once( './autoload.php');
require_once "./vendor/autoload.php";




$nichoirController = new \Swagger\App\Controller\NichoirController();


/*
require_once( './autoload.php');
require_once __DIR__ . '/vendor/autoload.php';


/*$api_instance = new Swagger\Client\Api\AdherentsApi();
$id = 56; // int |
=======
$api_instance = new Swagger\Client\Api\AdherentsApi();
$id = 1; // int |


try {
    $test = new Swagger\Client\Api\NichoirsApi();
    $test->getAllNichoir();
    $result = $api_instance->getAdherent($id);


    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentsApi->getAdherent: ', $e->getMessage(), PHP_EOL;
}*/
/*echo "ag";*/



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

$app->GET('/', function ($request, $response, $args) {

    return $response->write("<h1>Home</h1> ");
});
$app->run();


?>

