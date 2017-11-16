# Swagger\Client\OiseauxApi

All URIs are relative to *http://localhost:8082*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOiseau**](OiseauxApi.md#deleteOiseau) | **DELETE** /oiseaux/{id} | delete a oiseau resource.
[**getOiseau**](OiseauxApi.md#getOiseau) | **GET** /oiseaux/{id} | Retrieves a Oiseau resource.
[**postOiseau**](OiseauxApi.md#postOiseau) | **POST** /oiseaux | Creates a oiseau resource.
[**putOiseau**](OiseauxApi.md#putOiseau) | **PUT** /oiseaux/{id} | Replaces the Oiseau resource.


# **deleteOiseau**
> deleteOiseau($id)

delete a oiseau resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OiseauxApi();
$id = 56; // int | 

try {
    $api_instance->deleteOiseau($id);
} catch (Exception $e) {
    echo 'Exception when calling OiseauxApi->deleteOiseau: ', $e->getMessage(), PHP_EOL;
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

# **getOiseau**
> \Swagger\Client\Model\Oiseau getOiseau($id)

Retrieves a Oiseau resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OiseauxApi();
$id = 56; // int | 

try {
    $result = $api_instance->getOiseau($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OiseauxApi->getOiseau: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Oiseau**](../Model/Oiseau.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOiseau**
> \Swagger\Client\Model\Oiseau postOiseau($oiseau)

Creates a oiseau resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OiseauxApi();
$oiseau = new \Swagger\Client\Model\Oiseau(); // \Swagger\Client\Model\Oiseau | The new oiseau resource

try {
    $result = $api_instance->postOiseau($oiseau);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OiseauxApi->postOiseau: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oiseau** | [**\Swagger\Client\Model\Oiseau**](../Model/Oiseau.md)| The new oiseau resource | [optional]

### Return type

[**\Swagger\Client\Model\Oiseau**](../Model/Oiseau.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOiseau**
> \Swagger\Client\Model\Oiseau putOiseau($id, $oiseau)

Replaces the Oiseau resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OiseauxApi();
$id = 56; // int | 
$oiseau = new \Swagger\Client\Model\Oiseau(); // \Swagger\Client\Model\Oiseau | The updated Oiseau resource

try {
    $result = $api_instance->putOiseau($id, $oiseau);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OiseauxApi->putOiseau: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **oiseau** | [**\Swagger\Client\Model\Oiseau**](../Model/Oiseau.md)| The updated Oiseau resource | [optional]

### Return type

[**\Swagger\Client\Model\Oiseau**](../Model/Oiseau.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

