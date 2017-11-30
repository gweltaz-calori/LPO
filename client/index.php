<?php

require_once( './autoload.php');
require_once "./vendor/autoload.php";

$thecontroler = new \Swagger\Client\controler\controleurNichoir();
$thecontroler->indexAction();

/*
require_once( './autoload.php');

$api_instance = new Swagger\Client\Api\AdherentsApi();
$id = 1; // int |

try {
    $test = new Swagger\Client\Api\NichoirsApi();
    $test->getAllNichoir();
    $result = $api_instance->getAdherent($id);

    var_dump($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentsApi->getAdherent: ', $e->getMessage(), PHP_EOL;
}
*/
?>
