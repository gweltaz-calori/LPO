<?php
require_once( './autoload.php');

$api_instance = new Swagger\Client\Api\AdherentsApi();
$id = 56; // int |

try {
    $result = $api_instance->getAdherent($id);

    print_r($result->getNom());
} catch (Exception $e) {
    echo 'Exception when calling AdherentsApi->getAdherent: ', $e->getMessage(), PHP_EOL;
}

?>
