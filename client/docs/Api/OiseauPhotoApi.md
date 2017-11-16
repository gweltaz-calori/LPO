# Swagger\Client\OiseauPhotoApi

All URIs are relative to *http://localhost:8082*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postOiseauPhoto**](OiseauPhotoApi.md#postOiseauPhoto) | **POST** /oiseauPhoto | Creates a oiseauPhoto resource.


# **postOiseauPhoto**
> \Swagger\Client\Model\OiseauPhoto postOiseauPhoto($etape)

Creates a oiseauPhoto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OiseauPhotoApi();
$etape = new \Swagger\Client\Model\OiseauPhoto(); // \Swagger\Client\Model\OiseauPhoto | The new oiseauPhoto resource

try {
    $result = $api_instance->postOiseauPhoto($etape);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OiseauPhotoApi->postOiseauPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **etape** | [**\Swagger\Client\Model\OiseauPhoto**](../Model/OiseauPhoto.md)| The new oiseauPhoto resource | [optional]

### Return type

[**\Swagger\Client\Model\OiseauPhoto**](../Model/OiseauPhoto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

