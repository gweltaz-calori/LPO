# Swagger\Client\EtapesApi

All URIs are relative to *http://localhost:8082*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postEtape**](EtapesApi.md#postEtape) | **POST** /etapes | Creates a etape resource.


# **postEtape**
> \Swagger\Client\Model\Etape postEtape($etape)

Creates a etape resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EtapesApi();
$etape = new \Swagger\Client\Model\Etape(); // \Swagger\Client\Model\Etape | The new etape resource

try {
    $result = $api_instance->postEtape($etape);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtapesApi->postEtape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **etape** | [**\Swagger\Client\Model\Etape**](../Model/Etape.md)| The new etape resource | [optional]

### Return type

[**\Swagger\Client\Model\Etape**](../Model/Etape.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

