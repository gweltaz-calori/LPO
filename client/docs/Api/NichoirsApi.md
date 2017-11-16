# Swagger\Client\NichoirsApi

All URIs are relative to *http://localhost:8082*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNichoir**](NichoirsApi.md#deleteNichoir) | **DELETE** /nichoirs/{id} | delete a nichoir resource.
[**getAllNichoir**](NichoirsApi.md#getAllNichoir) | **GET** /nichoirs | Retrieves the collection of Nichoir resources.
[**postNichoir**](NichoirsApi.md#postNichoir) | **POST** /nichoirs | Creates a nichoir resource.


# **deleteNichoir**
> deleteNichoir($id)

delete a nichoir resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NichoirsApi();
$id = 56; // int | 

try {
    $api_instance->deleteNichoir($id);
} catch (Exception $e) {
    echo 'Exception when calling NichoirsApi->deleteNichoir: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllNichoir**
> \Swagger\Client\Model\Nichoir[] getAllNichoir()

Retrieves the collection of Nichoir resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NichoirsApi();

try {
    $result = $api_instance->getAllNichoir();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NichoirsApi->getAllNichoir: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Nichoir[]**](../Model/Nichoir.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNichoir**
> \Swagger\Client\Model\Nichoir postNichoir($nichoir)

Creates a nichoir resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NichoirsApi();
$nichoir = new \Swagger\Client\Model\Nichoir(); // \Swagger\Client\Model\Nichoir | The new nichoir resource

try {
    $result = $api_instance->postNichoir($nichoir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NichoirsApi->postNichoir: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nichoir** | [**\Swagger\Client\Model\Nichoir**](../Model/Nichoir.md)| The new nichoir resource | [optional]

### Return type

[**\Swagger\Client\Model\Nichoir**](../Model/Nichoir.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

